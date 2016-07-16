<?php



if(isset($_POST['ok'])){
      //print_r($_POST);
	  $res= $db->update('qqq',[

			'qid'=>$_POST['qid'],
		  'qname'=>$_POST['qname'],
		  'qstatus'=>$_POST['qstatus'],
		  'qdate'=>$_POST['qdate'],

	  ],["qid = '{$_GET['id']}'"]);


      if($res){
        $db->redirect('qqq/index');
      }else{

      }
}


$data = $db->select('qqq')->where(["qid = '{$_GET['id']}'"])->one();



 ?>
