<?php

if(isset($_GET['p_id'])){
      //print_r($_POST);
      if($db->delete('patient',["p_id = '{$_GET['p_id']}'"])){
        $db->redirect('patient/index');
      }else{

      }
}
