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


if (isset($_POST['search'])) {
    $query = $db->select('members');
    //print_r($_POST);
    $where = [];
    switch ($_POST['search_by']) {
        case "account_no":
            $where[] = $_POST['account_no'] ? "account_no = '" . $_POST['account_no'] . "'" : '';
            break;

        case "employee_id":
            $where[] = $_POST['employee_id'] ? "account_no = '" . $_POST['employee_id'] . "'" : '';
            break;

        case "fullname":
            $where[] = $_POST['fullname'] ? "account_no = '" . $_POST['fullname'] . "'" : '';
            break;
    }
    $query = $where ? $query->where($where) : $query;
    //echo $query->sql;
    //exit();
    //$data = $query->();
    $db->redirect('member', ['account_no' => $data->account_no]);
}

if (isset($_GET['account_no'])) {

    $query = $db->select('members');
    $where = [];
    $where[] = $_GET['account_no'] ? "account_no = '" . $_GET['account_no'] . "'" : '';
    $where = array_filter($where);
    $query = $where ? $query->where($where) : $query;
    //$data = $query->one();
}


// if(isset($_GET['search'])){
//     $where = [];
//     $where[] = $_GET['account_no']?"account_no LIKE '%".$_GET['account_no']."%'":'';
//     $where[] = $_GET['fullname']?"name LIKE '%".$_GET['fullname']."%' OR lastname LIKE '%".$_GET['fullname']."%'":'';
//     $where = array_filter($where);
//     //print_r($where);
//     $query = $where?$query->where($where):$query;
//     //echo $query->sql;
// }

$page = pagination(25,$query->count());
$data = $query->limit($page['start'],$page['size'])->all();
//if($res){
//    $data = $res->fetch_assoc();
//}