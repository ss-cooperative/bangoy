<?php

if(isset($_POST['ok'])){
      //print_r($_POST);
	  $res = $db->insert('treat',[

		  't_no'=>$_POST['t_no'],
		  'p_id'=>$_POST['p_id'],
		  't_date'=>$_POST['t_date'],
		  'symptom'=>$_POST['symptom'],
		  'pressure'=>$_POST['pressure'],
	    'temp'=>$_POST['temp'],
		  'pulse'=>$_POST['pulse'],
	    'breathe'=>$_POST['breathe'],
		  'resultjudge'=>$_POST['resultjudge'],
		  'm_id'=>$_POST['m_id'],
			's_id'=>$_POST['s_id'],

	  ]);
	  if($res){
        $db->redirect('treat/index');
      }else{

      }
}

$data = null;





 ?>
