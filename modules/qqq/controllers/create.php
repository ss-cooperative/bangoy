<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */

if (isset($_POST['ok'])) {
    //print_r($_POST);
    $res = $db->insert('qqq', [

        'qid' => $_POST['qid'],
        'qname' => $_POST['qname'],
        'qstatus' => $_POST['qstatus'],
        'qdate' => $_POST['qdate'],
    ]);
    if ($res->save()) {
        $db->redirect('qqq/index');
    } else {
        
    }
}

$data = null;
?>
