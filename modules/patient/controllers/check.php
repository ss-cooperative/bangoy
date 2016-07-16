<?php
$title = 'ตรวจสอบประวัติ';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$res_qqq = $db->sql("SELECT * FROM `qqq` LEFT JOIN patient ON patient.p_id = qqq.p_id")->where([
    'qqq.qstatus=1',
    'DATE(qqq.qdate) = CURDATE()',
    //"TIME(qqq.qdate) >= '8:30:00'"
    ])->orderBy('qqq.qno ASC')->all();


$query = $db->select('patient');

if(isset($_GET['search'])){
    $where = [];
    $where[] = $_GET['p_id']?"p_id LIKE '%".$_GET['p_id']."%'":'';
    $where[] = $_GET['p_name']?"p_name LIKE '%".$_GET['p_name']."%' ":'';
    $where[] = $_GET['p_surname']?"p_surname LIKE '%".$_GET['p_surname']."%' ":'';
    $where = array_filter($where);
    //print_r($where);
    $query = $where?$query->where($where):$query;
    //echo $query->sql;
}

$page = pagination(25,$query->count());
$data_patient = $query->limit($page['start'],$page['size'])->all();

