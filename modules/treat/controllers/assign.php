<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_GET['p_id'])) {
    $res_patient = $db->select('patient')->where(["p_id = '{$_GET['p_id']}'"])->one();
    $title = 'อาการเบื้ยงต้น : ' . $res_patient->p_name . " " . $res_patient->p_surname;
}

if (isset($_POST['save'])) {
    //print_r($_POST);
    $res = $db->insert('treat', [
        'symptom' => $_POST['symptom'],
        'pressure' => $_POST['pressure'],
        'temp' => $_POST['temp'],
        't_hight' => $_POST['t_hight'],
        't_wieght' => $_POST['t_wieght'],
        'p_id' => $_POST['p_id'],
        't_date' => date("Y-m-d H:i:s"),
        'user_id' => $_SESSION['user_id'],
        'resultjude' => $_POST['resultjude'],
    ]);
    echo $db->sql;
    if ($res->save()) {
        $db->redirect('treat/assign', ['t_no' => $db->lastInsert()]);
    } else {
        echo $db->error();
    }
}

if (isset($_POST['update'])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    //exit();
    $res = $db->update('treat', [
        'symptom' => $_POST['symptom'],
        'pressure' => $_POST['pressure'],
        'temp' => $_POST['temp'],
        't_hight' => $_POST['t_hight'],
        't_wieght' => $_POST['t_wieght'],
        'resultjude' => $_POST['resultjude'],
            ], ["t_no = '{$_POST['t_no']}'"]);


    if ($res->save()) {
        $db->delete('paymedicine', ['t_no' => $_POST['t_no']]);
        foreach ($_POST['m_id'] as $key=>$val) {
            if($_POST['m_id'][$key])
            $res = $db->insert('paymedicine', [
                't_no' => $_POST['t_no'],
                'm_id' => $_POST['m_id'][$key],
                'pay_amount' => $_POST['pay_amount'][$key],
                'user_id' => $_SESSION['user_id'],
            ]);
        }

        $db->redirect('treat/assign', ['t_no' => $_POST['t_no']]);
    } else {
        echo $res->error();
        exit();
    }
}

if (isset($_GET['t_no'])) {
    $res_patient = $db->sql('SELECT * FROM treat INNER JOIN patient ON patient.p_id = treat.p_id
')->where(["treat.t_no = '{$_GET['t_no']}'"])->one();
    $title = 'อาการเบื้ยงต้น : ' . $res_patient->p_name . " " . $res_patient->p_surname;
    $res_paymedicine = $db->sql('SELECT * FROM paymedicine')->where(["t_no = '{$_GET['t_no']}'"])->all();
    $res_medicine = $db->sql('SELECT * FROM medicine')->all();
}

