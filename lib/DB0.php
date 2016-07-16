<?php
class DB extends PDO{
  //public $database;

    function __construct(){
      try{
        parent::__construct('mysql:host=localhost;dbname='.dbname.';',username,password);
        $this->exec("SET CHARACTER SET utf8");
      }catch(PDOException $e){
        echo $e->getMessage();
      }
    }

    function __destruct(){
      //$this->database = null;
    }

  public $sql;
  public $query;
  public function select($tb,$field='*'){
    //$query = $this->prepare("SELECT * FROM {$tb}");
    $this->sql = "SELECT {$field} FROM {$tb}";
    // $query->bindParam('fieldSelect', $fieldSelect);
    // $query->bindValue('tb', $tb);
    // $query->debugDumpParams();
     //$query->execute(array(':fieldSelect'=>$fieldSelect));
   //$query->execute(array(':fieldSelect'=>$fieldSelect));
     //$this->query =$query;
     return $this;
  }

  public function sql($sql){
    //$query = $this->prepare("SELECT * FROM {$tb}");
    $this->sql = $sql;
    return $this;
  }

  public function where($arr=[]){
    $where = ' WHERE ';
    $this->sql .= !empty($arr)?$where.implode(' AND ',$arr):'';
   return $this;
 }
 public function orWhere($arr=[]){
   $where = (strpos('where',$this->sql))?' WHERE ':' OR ';
   $this->sql .= !empty($arr)?$where.implode(' OR ',$arr):'';
  return $this;
}

   public function one(){
  //  $res =$this->query->fetch(PDO::FETCH_OBJ);
    $query = $this->prepare($this->sql);
    // /$query->debugDumpParams();
    $query->execute();
    return $query->fetch(PDO::FETCH_OBJ);
  }


  public function all(){
  //  $res =$this->query->fetch(PDO::FETCH_OBJ);
   $query = $this->prepare($this->sql);
   $query->execute();
   //$query->debugDumpParams();
   $all =[];
   while ($row=$query->fetch(PDO::FETCH_OBJ)) {
     $all[]=$row;
   }
   return $all;
  }

  public function insert($tb,$field){
    $sql = "INSERT INTO {$tb} ";
    $key=[]; $values=[];
    foreach ($field as $k => $v) {
      $key[]=$k;
      $value[]=$v?$v:NULL;
    }
    $sql.="(".implode(", ",$key).") VALUES ('".implode("', '",$value)."')";
    $query = $this->prepare($sql);
    return $query->execute();
  }



}

$db = new DB();
