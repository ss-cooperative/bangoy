<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */



if (isset($_POST['update']) || isset($_POST['finish'])) {

//    print_r($_POST);
//    exit();
    

    $res = $db->update('treat', [
        'resultjude' => $_POST['resultjude'],
            ], ["t_no = '{$_POST['t_no']}'"]);
    //echo $db->sql;
    
    if ($res->save()) {
        $db->delete('paymedicine', ["t_no = " . $_POST['t_no']]);
        foreach ($_POST['m_id'] as $key => $val) {
            if ($_POST['m_id'][$key]) {
                $res_insert = $db->insert('paymedicine', [
                    't_no' => $_POST['t_no'],
                    'm_id' => $_POST['m_id'][$key],
                    'pay_amount' => $_POST['pay_amount'][$key],
                    'pay_status' => 1,
                    'user_id' => $_SESSION['user_id'],
                ]);
                //echo $db->sql."<br/>";
                $res_insert->save();
            }
        }
        //exit();
        //app_date
        $db->delete('appointment', ["p_id = '" . $_POST['p_id']."'"]);
        if (isset($_POST['app_date'])) {

            //$app_date = explode(' ', $_POST['app_date']);
            $res_insert = $db->insert('appointment', [
                'app_date' => convDateThToDb($_POST['app_date']),
                'app_time' => $_POST['app_time'],
                'app_reason' => $_POST['app_reason'],
                'app_status' => 1,
                'user_id' => $_SESSION['user_id'],
                "t_no" => $_POST['t_no'],
                'p_id' => $_POST['p_id']
            ]);
            echo $db->sql;
            echo $db->error();
            //exit();
            $res_insert->save();
        }
        updateQqq($_POST['p_id'], 3);
        if (isset($_POST['finish'])) {            
            $db->redirect('treat/index');
        } else {
            $db->redirect('treat/heal', ['p_id' => $_POST['p_id']]);
        }
    } else {
        echo $res->error();
        //exit();
    }
}

$title = 'ตรวจรักษา/นัดหมาย ';
if (isset($_GET['p_id'])) {

    $res_patient = $db->sql('SELECT * FROM treat INNER JOIN patient ON patient.p_id = treat.p_id
')->where(["treat.p_id = '{$_GET['p_id']}'"])->orderBy('treat.t_no DESC')->one();
//echo $db->sql;
    $title .= $res_patient->p_name . " " . $res_patient->p_surname;
    $res_paymedicine = $db->sql('SELECT paymedicine.* FROM paymedicine INNER JOIN treat ON treat.t_no = paymedicine.t_no ')->where(["p_id = '{$_GET['p_id']}'"])->all();

    if ($res_patient->t_no)
        $res_app = $db->sql('SELECT * FROM appointment')->where(["t_no = {$res_patient->t_no}"])->one();

    $res_medicine = $db->sql('SELECT * FROM medicine')->all();
}

