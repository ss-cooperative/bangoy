<?php

if(isset($_POST['ok'])){
      print_r($_POST);

      if($db->insert('appointment',[
        'p_id'=>$_POST['p_id'],
        'app_date'=>$_POST['app_date'],
        'app_time'=>$_POST['app_time'],
        'app_reason'=>$_POST['app_reason'],
        'app_status'=> '1',

        ])){
        $db->redirect('appointment/index');
      }else{

      }
}

$data = '';





 ?>
