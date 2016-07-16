<?php

if(isset($_POST['ok'])){
      //print_r($_POST);
      if($db->insert('test',['name'=>$_POST['name']])){
        $db->redirect('ying/index');
      }else{

      }
}

$data = '';





 ?>
