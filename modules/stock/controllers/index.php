<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$title = 'เงินหุ้น';

/*
  $sql = "SELECT * FROM members ";
  $res = $conn->query($sql);
  $data = [];
 */



if (isset($_GET['search'])) {
    $query = $db->select('members');
    $where = [];
    $where[] = $_GET['account_no'] ? "account_no LIKE '%" . $_GET['account_no'] . "%'" : '';
    $where[] = $_GET['fullname'] ? "name LIKE '%" . $_GET['fullname'] . "%' OR lastname LIKE '%" . $_GET['fullname'] . "%'" : '';
    $where = array_filter($where);
    $query = $where ? $query->where($where) : $query;
    $page = pagination(25, $query->count());
    $data = $query->limit($page['start'], $page['size'])->all();
}




if (isset($_POST['search'])) {
    $query = $db->select('members');
    //print_r($_POST);
    $where = [];
    switch ($_POST['search_by']) {
        case "account_no":
            $where[] = $_POST['account_no'] ? "account_no = '" . $_POST['account_no'] . "'" : '';
            break;

        case "employee_id":
            $where[] = $_POST['employee_id'] ? "account_no = '" . $_POST['employee_id'] . "'" : '';
            break;

        case "fullname":
            $where[] = $_POST['fullname'] ? "account_no = '" . $_POST['fullname'] . "'" : '';
            break;
    }
    $query = $where ? $query->where($where) : $query;
    //echo $query->sql;
    //exit();
    $data = $query->one();
    $db->redirect('stock', ['account_no' => $data->account_no]);
}

$data_stock = [];
if (isset($_GET['account_no'])) {

    $query = $db->select('members');
    $where = [];
    $where[] = $_GET['account_no'] ? "account_no = '" . $_GET['account_no'] . "'" : '';
    $where = array_filter($where);
    $query = $where ? $query->where($where) : $query;
    $data = $query->one();

    $data_stock = $db->select("book_data")->where([
        "account_no = '" . $data->account_no . "'",
        "book_type_id = '3'"
        ])->one();
    
    $data_stock_transctions = [];
    if ($data_stock) {
        $data_stock_transactions = $db->select("transactions_stock")->where([
            "bookac_no = '" . $data_stock->bookac_no . "'"
            ])->all();
    }

    
}


#ค่า
    $config_fee = $db->select('config_value')->where(["category = '03'", "section = '01'"])->one();
    #หุ่นละ
    $config_unitPrice = $db->select('config_value')->where(["category = '04'", "section = '01'"])->one();
    #ค่า
    $config_unitFirst = $db->select('config_value')->where(["category = '04'", "section = '02'"])->one();
    