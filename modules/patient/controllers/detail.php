<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */


if(isset($_GET['p_id'])){
$data = $db->select('patient')->where(["p_id = '{$_GET['p_id']}'"])->one();




$data_treat = $db->select('treat')->where(["p_id='{$_GET['p_id']}'"])->all();
//print_r($data);

$title = 'ข้อมูลผู้ป่วย : '.$data->p_name." ".$data->p_surname;
}else{
    $title = 'ไม่พบข้อมูลผู้ป่วย';
}