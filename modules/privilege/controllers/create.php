<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.privilege
 */


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
