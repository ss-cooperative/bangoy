<?php
$data=[];
//print_r($_POST);
if(isset($_POST['search_pid'])){
$db->redirect("treat/index&p_id={$_POST['p_id']}");
//print_r($data);
}

if(isset($_GET['p_id'])){
$data = $db->select('patient')->where(["p_id='{$_GET['p_id']}'"])->one();
//print_r($data);
}

 ?>
