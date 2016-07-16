<?php

if(isset($_GET['id'])){
      //print_r($_POST);
      if($db->delete('qqq',["qid = '{$_GET['id']}'"])){
        $db->redirect('qqq/index');
      }else{

      }
}
