<?php

if (isset($_POST['ok'])) {
    //print_r($_POST);
    $res = $db->update('patient', [
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
         ], ["p_id = '{$_GET['p_id']}'"]);


    if ($res) {
        $db->redirect('patient/index');
    } else {
        echo $res;
        exit();
    }
}

$data = $db->select('patient')->where(["p_id = '{$_GET['id']}'"])->one();
$title = 'แก้ไขข้อมูลผู้ป่วย : '.$data->p_id;
?>
