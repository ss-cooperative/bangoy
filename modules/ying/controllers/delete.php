<?php

if(isset($_GET['id'])){
      //print_r($_POST);
      if($db->delete('test',["id = '{$_GET['id']}'"])){
        $db->redirect('ying/index');
      }else{

      }
}
