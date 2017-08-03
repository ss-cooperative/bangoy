<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$title = 'ระบบจัดการสมาชิกสหกรณ์';

/*
$sql = "SELECT * FROM members ";
$res = $conn->query($sql);
$data = [];
*/

$query = $db->select('members');

if(isset($_GET['search'])){
    $where = [];
    $where[] = $_GET['account_no']?"account_no LIKE '%".$_GET['account_no']."%'":'';
    $where[] = $_GET['fullname']?"name LIKE '%".$_GET['fullname']."%' OR lastname LIKE '%".$_GET['fullname']."%'":'';
    $where = array_filter($where);
    //print_r($where);
    $query = $where?$query->where($where):$query;
    //echo $query->sql;
}

$page = pagination(25,$query->count());
$data = $query->limit($page['start'],$page['size'])->all();
//if($res){
//    $data = $res->fetch_assoc();
//}