<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$title = "สมัครสมาชิก";

function checkPid(){
    global $db;
    
    $p_ids = $db->select('patient','p_id')->all();
    $arr_pid = [];
    foreach ($p_ids as $id){
        $arr_pid[] = str_replace('p', '', $id->p_id)*1;
    }    
    $max_id = max($arr_pid);
    $max_id = $max_id?$max_id:1;
    //print_r($arr_pid);
    $max_id = str_pad(($max_id+1), 4, '0', STR_PAD_LEFT);
    return 'p'.$max_id;
    
}



if (isset($_POST['ok'])) {
    //print_r($_POST);
    
    
    $p_id = checkPid();
    $_POST['pv_id'] = isset($_POST['pv_id'])?$_POST['pv_id']:1;
    $res = $db->insert('members', [
        'account_no' => $_POST['account_no'],
        'employee_id' => $_POST['employee_id'],
        'title' => $_POST['title'],
        'name' => $_POST['name'],
        'lastname' => $_POST['lastname'],
        'id_card' => $_POST['id_card'],
        'birthday' => convDateToDb($_POST['birthday'],'/'),
        'phone_number' => $_POST['phone_number'],
        'phone_officer' => $_POST['phone_officer'],
        'company' => $_POST['company'],
        'department' => $_POST['department'],
        'position' => $_POST['position'],
        'job_level' => $_POST['job_level'],
        'job_level' => $_POST['job_level'],
        'officer' => $_POST['officer'],
        'date_regis' => $_POST['date_regis'],        
    ]);
    if ($res->save()) {
        $db->redirect('member/view',['account_no'=>$_POST['account_no']]);
    } else {
        echo $res->error();
        exit();
    }
}


$data = null;
if (isset($_GET['qid'])) {
    $res_qqq = $db->sql("SELECT * FROM `qqq` ")->where([
    'qid='.$_GET['qid']
    //"TIME(qqq.qdate) >= '8:30:00'"
    ])->one();
    $data->p_name = $res_qqq->qname;
    $data->p_surname = $res_qqq->qsurname;
}


?>
