<?php

if(isset($_POST['ok'])){
      //print_r($_POST);
	  $res = $db->insert('staff',[

		  's_name'=>$_POST['s_name'],
		  's_nid'=>$_POST['s_nid'],
		  's_sex'=>$_POST['s_sex'],
		  's_position'=>$_POST['s_position'],
		  's_address'=>$_POST['p_address'],
	    's_education'=>$_POST['s_education'],
		  's_experience'=>$_POST['s_experience'],
	    's_tel'=>$_POST['s_tel'],
		  's_pic'=>$_POST['s_pic'],
		  's_per'=>$_POST['s_per'],
			
	  ]);
	  if($res){
        $db->redirect('staff/index');
      }else{

      }
}

$data = null;





 ?>
