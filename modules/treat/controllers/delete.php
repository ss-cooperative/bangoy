<?php

if(isset($_GET['id'])){
      //print_r($_POST);
      if($db->delete('treat',["t_no = '{$_GET['id']}'"])){
        $db->redirect('treat/index');
      }else{

      }
}
