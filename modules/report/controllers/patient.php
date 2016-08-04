<?php

$title = 'รายงานผู้ป่วย';
$t_date_start = date("Y-m-d");
$t_date_end = date("Y-m-d");
if (isset($_POST['search'])) {

    $t_date_start = convDateThToDb($_POST['t_date_start']);
    $t_date_end = convDateThToDb($_POST['t_date_end']);
}

$data = $db->sql("SELECT
treat.*,
patient.p_name,
patient.p_surname
FROM
treat
INNER JOIN patient ON patient.p_id = treat.p_id ")->where([
            "DATE(treat.t_date) >= '" . $t_date_start . "'",
            "DATE(treat.t_date) <= '" . $t_date_end . "'",
        ])->all();

