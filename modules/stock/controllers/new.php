<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$title = "สมัครสมาชิก";

function checkPid($prefix = "S") {
    global $db;
    $p_ids = $db->select('book_data', 'bookac_no')->all();
    $arr_pid = [];
    foreach ($p_ids as $id) {
        $arr_pid[] = str_replace($prefix, '', $id->bookac_no) * 1;
    }
    //print_r($arr_pid);
    $max_id = max($arr_pid);
    $max_id = $max_id ? $max_id : 1;
    //print_r($arr_pid);
    $max_id = str_pad(($max_id + 1), 4, '0', STR_PAD_LEFT);
    return $prefix . $max_id;
}

if (isset($_POST['ok'])) {
    //print_r($_POST);


//    $table_name = "transactions_stock";
//    $sql = "INSERT INTO " . $table_name . " Set account_no = '$account_id' , bookac_no = '$bookac_no_st' , tran_type = 'ชำระหุ้น' ,
//        period = '$period' ,  unit_stock = $stock_num , amount = $sum_stock, status_active = '1' , officer = 'Sira' , date_tran = '" . date('Y-m-d') . "'";
//    $conn->query($sql);

    $bookac_no = checkPid();    
    $res = $db->insert('book_data', [
        'bookac_no' => $bookac_no,
        'account_no' => $_POST['account_no'],
        'title' => $_POST['title'],
        'book_type' => 3,
        'deposit' => $_POST['deposit'],
        'stock' => $_POST['stock'],
        'sum_stock' => $_POST['sum_stock'],
        'status_active' => 1,
        'book_link' => $_POST['book_link'],
        'date_register' => $_POST['date_register'],
        'officer' => $_SESSION['user_id'],
    ]);
    if ($res->save()) {

        $res = $db->insert('transactions_stock', [
            'bookac_no' => $bookac_no,
            'account_no' => $_POST['account_no'],
            'period' => $_POST['period'],
            'unit_stock' => $_POST['sum_stock'],
            'tran_type' => 'fee',
            'amount' => $_POST['amount'],
            'status_active' => 1,
            'date_tran' => date("Y-m-d"),
            'officer' => $_SESSION['user_id'],
        ]);
        if ($res->save()) {
            $res2 = $db->insert('transactions_incoming', [
                'bookac_no' => $bookac_no,
                'account_no' => $_POST['account_no'],
                'period' => $_POST['period'],
                'tran_type' => 'fee',
                'amount' => $_POST['amount'],
                'status_active' => 1,
                'date_tran' => date("Y-m-d"),
                'officer' => $_SESSION['user_id'],
            ]);
            if ($res2->save()) {
                $db->redirect('stock', ['account_no' => $_POST['account_no']]);
            }
        }
    } else {
        echo $res->error();
        exit();
    }
}


$data = null;
if (isset($_GET['qid'])) {
    $res_qqq = $db->sql("SELECT * FROM `qqq` ")->where([
                'qid=' . $_GET['qid']
                    //"TIME(qqq.qdate) >= '8:30:00'"
            ])->one();
    $data->p_name = $res_qqq->qname;
    $data->p_surname = $res_qqq->qsurname;
}
?>
