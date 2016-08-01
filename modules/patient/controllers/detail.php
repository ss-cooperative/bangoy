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




$data_treat = $db->sql('SELECT 
    treat.* ,
    appointment.*
FROM
treat
LEFT JOIN appointment ON appointment.t_no = treat.t_no')->where(["treat.p_id='{$_GET['p_id']}'"])->all();


$data_paymedicine = $db->sql('SELECT *
FROM
paymedicine
INNER JOIN treat ON treat.t_no = paymedicine.t_no
INNER JOIN medicine ON medicine.m_id = paymedicine.m_id')->where(["treat.p_id='{$_GET['p_id']}'","paymedicine.pay_status=2"])->all();

//print_r($data);

$title = 'ข้อมูลผู้ป่วย : '.$data->p_name." ".$data->p_surname;
}else{
    $title = 'ไม่พบข้อมูลผู้ป่วย';
}