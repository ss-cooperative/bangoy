<?php

if(isset($_POST['ok'])){
      //print_r($_POST);
	  $res = $db->insert('gecal_drugs',[

		  'gc_id'=>$_POST['gc_id'],
		  'm_id'=>$_POST['m_id'],
		  'gc_amount'=>$_POST['gc_amount'],
		  'gc_date'=>$_POST['gc_date'],
		  'gc_because'=>$_POST['gc_because'],
	    's_id'=>$_POST['s_id'],

	  ]);
	  if($res){
        $db->redirect('gecal_drugs/index');
      }else{

      }
}

$data = null;





 ?>
