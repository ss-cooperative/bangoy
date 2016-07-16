<?php

$qno = $db->sql("SELECT * FROM `qqq` ")->where(['DATE(qqq.qdate) = CURDATE()'])->all();

$qno = count($qno);

$res = $db->insert('qqq', [

    //'qid'=>$_POST['qid'],
    'qname' => $_GET['qname'],
    'qsurname' => $_GET['qsurname'],
    'qstatus' => 1,
    'qdate' => date("Y-m-d H:i:s"),
    'p_id' => $_GET['p_id'],
    'qno'=>($qno+1)
        ]);
echo $db->sql;
if ($res) {
    $db->redirect('qqq/index');
} else {
    echo $db->error();
}

