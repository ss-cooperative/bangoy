<?php

$title = 'เพิ่มข้อมูลผู้ป่วย';

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
    $res = $db->insert('patient', [
        'p_id' => $p_id,
        'p_name' => $_POST['p_name'],
        'p_surname' => $_POST['p_surname'],
        'p_nid' => $_POST['p_nid'],
        'p_birthday' => $_POST['p_birthday'],
        'p_age' => $_POST['p_age'],
        'p_national' => $_POST['p_national'],
        'p_sex' => $_POST['p_sex'],
        'p_status' => $_POST['p_status'],
        'p_address' => $_POST['p_address'],
        'p_tel' => $_POST['p_tel'],
        'p_wieght' => $_POST['p_wieght'],
        'p_hight' => $_POST['p_hight'],
        'disease' => $_POST['disease'],
        'blood' => $_POST['blood'],
        'allergic' => $_POST['allergic'],
        'delegate' => $_POST['delegate'],
        'delegate_tel' => $_POST['delegate_tel'],
        'relationship' => $_POST['relationship'],
        'pv_id' => $_POST['pv_id'],
    ]);
    if ($res->save()) {
        $db->redirect('patient/detail',['p_id'=>$p_id]);
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
