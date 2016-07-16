<?php

$title = 'รายงานยาและเวชภัณฑ์';
$t_date_start = date("Y-m-d");
$t_date_end = date("Y-m-d");
if(isset($_POST['search'])){
$data = $db->sql("SELECT * FROM `medicine` ")->where([
    "DATE(m_exp) >= '".$_POST['t_date_start']."'",
    "DATE(m_exp) <= '".$_POST['t_date_end']."'",
        ])->all();
//echo $db->sql;
$t_date_start =$_POST['t_date_start'];
$t_date_end =$_POST['t_date_end'];
}

