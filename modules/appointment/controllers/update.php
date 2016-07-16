<?php



if(isset($_POST['ok'])){
      //print_r($_POST);
      if($db->update('test',['name'=>$_POST['name']],["id = '{$_GET['id']}'"])){
        $db->redirect('ying/index');
      }else{

      }
}


$data = $db->select('test')->where(["id = '{$_GET['id']}'"])->one();



 ?>
