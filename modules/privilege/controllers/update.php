<?php



if(isset($_POST['ok'])){
      //print_r($_POST);

	  $res= $db->update('privilege',[

		  'pv_name'=>$_POST['pv_name'],
	    'pv_detail'=>$_POST['pv_detail'],

	  ],["pv_id = '{$_GET['id']}'",]);
/*
  ],[
		"gc_id = '{$_GET['gid']}'",
		"m_id = '{$_GET['mid']}'",
	]);
*/

      if($res){
        $db->redirect('privilege/index');
      }else{

      }
}


$data = $db->select('privilege')->where(["pv_id = '{$_GET['id']}'"])->one();



 ?>
