<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_GET['search_account_no'])){
    $query = $db->select('members')->where(["account_no LIKE '%{$_GET['q']}%'"])->all();
    $data=[];
    foreach($query as $v){
       $data[] = ['id'=>$v->account_no,'text'=> $v->account_no] ;
    }
     echo json_encode([
        'items'=>$data,
        'total_count'=>count($data)
        ]);
}

if(isset($_GET['search_employee_id'])){
    $query = $db->select('members')->where([
        "employee_id LIKE '%{$_GET['q']}%' "
        ])->all();
    $data=[];
    foreach($query as $v){
       $data[] = ['id'=>$v->account_no,'text'=> $v->employee_id] ;
    }
     echo json_encode([
        'items'=>$data,
        'total_count'=>count($data)
        ]);
}

if(isset($_GET['search_fullname'])){
    $query = $db->select('members')->where([
        "name LIKE '%{$_GET['q']}%' OR lastname LIKE '%{$_GET['q']}%'"
        ])->all();
    $data=[];
    foreach($query as $v){
       $data[] = ['id'=>$v->account_no,'text'=> $v->name." ".$v->lastname] ;
    }
     echo json_encode([
        'items'=>$data,
        'total_count'=>count($data)
        ]);
}


