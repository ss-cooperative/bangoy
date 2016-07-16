<?php

if(isset($_GET['id'])){
      //print_r($_POST);
      if($db->delete('staff',["s_id = '{$_GET['id']}'"])){
        $db->redirect('staff/index');
      }else{

      }
}
