<?php



if(isset($_POST['ok'])){
      //print_r($_POST);
	  $res= $db->update('gecal_drugs',[

		  'gc_id'=>$_POST['gc_id'],
			'm_id'=>$_POST['m_id'],
		  'gc_amount'=>$_POST['gc_amount'],
		  'gc_date'=>$_POST['gc_date'],
		  'gc_because'=>$_POST['gc_because'],
	    's_id'=>$_POST['s_id'],

	  ],["gc_id = '{$_GET['id']}'"]);


      if($res){
        $db->redirect('gecal_drugs/index');
      }else{

      }
}


$data = $db->select('gecal_drugs')->where(["gc_id = '{$_GET['id']}'"])->one();



 ?>
