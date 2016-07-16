<?php

if(isset($_GET['id'])){
      //print_r($_POST);
      if($db->delete('medicine',["m_id = '{$_GET['id']}'"])){
        $db->redirect('medicine/index');
      }else{

      }
}
