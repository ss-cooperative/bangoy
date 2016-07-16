<?php

if(isset($_GET['id'])){
      //print_r($_POST);
      if($db->delete('gecal_drugs',["gc_id = '{$_GET['id']}'"])){
        $db->redirect('gecal_drugs/index');
      }else{

      }
}
