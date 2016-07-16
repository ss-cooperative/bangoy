<?php

if (isset($_POST['ok'])) {
    //print_r($_POST);
    $res = $db->insert('qqq', [

        'qid' => $_POST['qid'],
        'qname' => $_POST['qname'],
        'qstatus' => $_POST['qstatus'],
        'qdate' => $_POST['qdate'],
    ]);
    if ($res) {
        $db->redirect('qqq/index');
    } else {
        
    }
}

$data = null;
?>
