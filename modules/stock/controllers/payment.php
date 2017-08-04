<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$title = "ชำระค่าหุ้น";

if (isset($_POST['ok'])) {

    $res = $db->insert('transactions_stock', [
        'bookac_no' => $_POST['bookac_no'],
        'period' => $_POST['period'],
        'unit_stock' => $_POST['stock'],
        'tran_type' => 'fee',
        'amount' => $_POST['sum_stock'],
        'status_active' => 1,
        'date_tran' => date("Y-m-d"),
        'officer' => $_SESSION['user_id'],
    ]);
    if ($res->save()) {
        $res2 = $db->insert('transactions_incoming', [
            'bookac_no' => $_POST['bookac_no'],
            'period' => $_POST['period'],
            'tran_type' => 'fee',
            'amount' => $_POST['sum_stock'],
            'status_active' => 1,
            'date_tran' => date("Y-m-d"),
            'officer' => $_SESSION['user_id'],
        ]);
        if ($res2->save()) {
            $db->redirect('stock', ['account_no' => $_POST['account_no']]);
        } else {
            echo $res2->error();
            //exit();
        }
    } else {
        echo $res->error();
        exit();
    }
}



    