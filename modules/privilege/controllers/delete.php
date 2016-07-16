<?php

if(isset($_GET['id'])){
      //print_r($_POST);
      if($db->delete('privilege',["pv_id = '{$_GET['id']}'"])){
        $db->redirect('privilege/index');
      }else{

      }
}
