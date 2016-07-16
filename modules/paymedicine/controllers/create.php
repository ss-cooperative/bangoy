<?php

if(isset($_POST['ok'])){
      //print_r($_POST);
	  $res = $db->insert('medicine',[

		  'm_id'=>$_POST['m_id'],
		  'm_name'=>$_POST['m_name'],
		  'm_volume'=>$_POST['m_voloum'],
		  'm_type'=>$_POST['m_type'],
		  'm_unit'=>$_POST['m_unit'],
	    'm_per_unit'=>$_POST['m_per_unit'],
		  'm_amount'=>$_POST['m_amount'],
	    'm_price'=>$_POST['m_price'],
		  'm_stock'=>$_POST['m_stock'],
		  'm_detail'=>$_POST['m_detail'],
			'm_exp'=>$_POST['m_exp'],

	  ]);
	  if($res){
        $db->redirect('medicine/index');
      }else{

      }
}

$data = null;





 ?>
