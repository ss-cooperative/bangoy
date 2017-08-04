<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$title = 'เงินหุ้น';

/*
$sql = "SELECT * FROM members ";
$res = $conn->query($sql);
$data = [];
*/



if(isset($_GET['search'])){
    $query = $db->select('members');
    $where = [];
    $where[] = $_GET['account_no']?"account_no LIKE '%".$_GET['account_no']."%'":'';
    $where[] = $_GET['fullname']?"name LIKE '%".$_GET['fullname']."%' OR lastname LIKE '%".$_GET['fullname']."%'":'';
    $where = array_filter($where);
    $query = $where?$query->where($where):$query;
    $page = pagination(25,$query->count());
$data = $query->limit($page['start'],$page['size'])->all();
}




if(isset($_POST['search'])){
    $query = $db->select('members');
    //print_r($_POST);
    $where = [];
    $where[] = $_POST['account_no']?"account_no = '".$_POST['account_no']."'":'';
    $where = array_filter($where);
    $query = $where?$query->where($where):$query;
    $where = [];
    $where[] = $_POST['fullname']?"account_no = '".$_POST['fullname']."'":'';
    $where = array_filter($where);
    $query->orWhere($where);
    //echo $query->sql;
    //exit();
    $data = $query->one();   
<<<<<<< HEAD
    $db->redirect('stock',['account_no'=>$data->account_no]);
=======
    $db->redirect('stock/index',['account_no'=>$_POST['account_no']]);
>>>>>>> a9641c89438222c2dd559e739b7570f32ebe5f81
}

$data_stock = [];
if(isset($_GET['account_no'])){
   
    $query = $db->select('members');
    $where = [];
    $where[] = $_GET['account_no']?"account_no = '".$_GET['account_no']."'":'';
    $where = array_filter($where);
    $query = $where?$query->where($where):$query;
    $data = $query->one();   
    
    $data_stock = $db->select("book_data")->where(["account_no = '".$data->account_no."'","book_type = '3'"])->one();
    
    
}


