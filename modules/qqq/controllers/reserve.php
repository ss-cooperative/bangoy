<?php

/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */
$qno = $db->sql("SELECT * FROM `qqq` ")->where(['DATE(qqq.qdate) = CURDATE()'])->all();

$qno = count($qno);

$res = $db->insert('qqq', [

    //'qid'=>$_POST['qid'],
    'qname' => $_GET['qname'],
    'qsurname' => $_GET['qsurname'],
    'qstatus' => 1,
    'qdate' => date("Y-m-d H:i:s"),
    'p_id' => $_GET['p_id'],
    'qno' => ($qno + 1)
        ]);
//echo $db->sql;
if ($res->save()) {

    $res_update = $db->update('appointment', [
        'app_status' => 0,
            ], ["p_id = '{$_GET['p_id']}'"]);
            echo $db->sql;
    if($res_update->save()){
        echo 'ok';
    }


    //$db->redirect('qqq/index');
} else {
    echo $db->error();
}

