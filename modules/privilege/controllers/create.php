<?php

if(isset($_POST['ok'])){
      //print_r($_POST);
	  $res = $db->insert('privilege',[

		  'pv_name'=>$_POST['pv_name'],
		  'pv_detail'=>$_POST['pv_detail'],

	  ]);
	  if($res){
        $db->redirect('privilege/index');
      }else{

      }
}

$data = null;





 ?>
