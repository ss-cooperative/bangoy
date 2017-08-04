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
    print_r($_POST);
    //uploadFile($_FILES['picture'],'patient',$_GET['p_id']);
    //exit();
       
    
    $res = $db->update('members', [
        'Employee_no' => $_POST['Employee_no'],
        'title' => $_POST['title'],
        'name' => $_POST['name'],
        'lastname' => $_POST['lastname'],
        'id_card' => $_POST['id_card'],
        'birthday' => $_POST['birthday'],
        'phone_number' => $_POST['phone_number'],
        'phone_officer' => $_POST['phone_officer'].($_POST['phone_officer_to']?"-".$_POST['phone_officer_to']:''),
        'company' => $_POST['company'],
        'department' => $_POST['department'],
        'position' => $_POST['position'],
        'job_level' => $_POST['job_level'],
        'job_level' => $_POST['job_level'],
        'officer' => $_POST['officer'],
        'date_regis' => $_POST['date_regis'],   
         ], ["account_no = '{$_GET['account_no']}'"]);


    if ($res->save()) {
        $db->redirect('member/index');
    } else {
        echo $res->error();
        exit();
    }
}

$data = $db->select('members')->where(["account_no = '{$_GET['account_no']}'"])->one();
$title = 'แก้ไขข้อมูลสมาชิก ';
