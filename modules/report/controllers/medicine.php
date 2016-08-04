<?php

$title = 'รายงานยาและเวชภัณฑ์';
//echo $t_date_start = date("d-m-Y");
//exit();
$t_date_start = date("Y-m-d");
$t_date_end = date("Y-m-d");
if (isset($_POST['search'])) {

    $t_date_start = convDateThToDb($_POST['t_date_start']);
    $t_date_end = convDateThToDb($_POST['t_date_end']);
}

$data = $db->sql("SELECT *,sum(paymedicine.pay_amount) AS orders FROM paymedicine
INNER JOIN medicine ON medicine.m_id = paymedicine.m_id ")->where([
            "DATE(paymedicine.pay_date) >= '" . $t_date_start . "'",
            "DATE(paymedicine.pay_date) <= '" . $t_date_end . "'",
            "paymedicine.pay_status = 2"
        ])
        ->groupBy('paymedicine.m_id')
        ->all();
//echo $db->sql;
//exit();

