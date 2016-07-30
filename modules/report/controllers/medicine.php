<?php

$title = 'รายงานยาและเวชภัณฑ์';
$t_date_start = date("d-m-Y");
$t_date_end = date("d-m-Y");
if (isset($_POST['search'])) {
    $data = $db->sql("SELECT *,sum(paymedicine.pay_amount) AS orders FROM paymedicine
INNER JOIN medicine ON medicine.m_id = paymedicine.m_id ")->where([
                "DATE(paymedicine.pay_date) >= '" . convDateToDb($_POST['t_date_start']) . "'",
                "DATE(paymedicine.pay_date) <= '" . convDateToDb($_POST['t_date_end']) . "'",
                "paymedicine.pay_status = 2"
            ])->all();
//echo $db->sql;
    $t_date_start = $_POST['t_date_start'];
    $t_date_end = $_POST['t_date_end'];
}

