<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




if (isset($_POST['update']) || isset($_POST['finish'])) {

    //print_r($_POST);
    //exit();

    $res = $db->update('treat', [
        'resultjude' => $_POST['resultjude'],
            ], ["t_no = '{$_POST['t_no']}'"]);
    echo $db->sql;
    if ($res->save()) {
        $res_paymedicine = $db->sql('SELECT * FROM paymedicine')->where(["t_no = {$_GET['t_no']}"])->all();
        foreach ($res_paymedicine as $key => $val) {
            $res = $db->update('paymedicine', [
                'pay_status' => 2
                    ], ["t_no = '{$_POST['t_no']}'"]);
        }


        $db->redirect('paymedicine/index');
    } else {
        echo $res->error();
        //exit();
    }
}

$title = 'ตรวจรักษา/นัดหมาย : ';
if (isset($_GET['t_no'])) {

    $res_patient = $db->sql('SELECT * FROM treat INNER JOIN patient ON patient.p_id = treat.p_id
')->where(["treat.t_no = '{$_GET['t_no']}'"])->orderBy('treat.t_no DESC')->one();
//echo $db->sql;
    $title .= $res_patient->p_name . " " . $res_patient->p_surname;
    $res_paymedicine = $db->sql('SELECT paymedicine.*,medicine.m_name,medicine.m_price FROM paymedicine INNER JOIN treat ON treat.t_no = paymedicine.t_no INNER JOIN medicine on medicine.m_id = paymedicine.m_id ')->where(["paymedicine.t_no = {$_GET['t_no']}"])->all();
//    echo $db->sql;
//    print_r($res_paymedicine);

    if ($res_patient->t_no)
        $res_app = $db->sql('SELECT * FROM appointment')->where(["t_no = {$res_patient->t_no}"])->one();

    $res_medicine = $db->sql('SELECT * FROM medicine')->all();
}

