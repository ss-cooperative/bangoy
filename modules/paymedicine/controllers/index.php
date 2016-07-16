<?php

$title = "จ่ายยา";
$sql = 'SELECT
    paymedicine.*,
    patient.p_name,
    patient.p_surname,
    treat.t_date
    FROM
    paymedicine
    INNER JOIN treat ON treat.t_no = paymedicine.t_no
    INNER JOIN patient ON patient.p_id = treat.p_id ';


$where = [];
$where[] = (isset($_GET['p_id'])&&$_GET['p_id'])?'treat.p_id='.$_GET['p_id']:'';
$where[] = (isset($_GET['t_no'])&&$_GET['t_no'])?'treat.t_no='.$_GET['t_no']:'';
$where = array_filter($where);
$sql.="WHERE ".($where?implode(' AND ', $where):'pay_status = 1 ');
$sql.='
    GROUP BY
    paymedicine.t_no
';
//echo $sql;
$data = $db->sql($sql)->all();

if (isset($_GET['p_id'])) {

    $res_patient = $db->sql('SELECT * FROM treat INNER JOIN patient ON patient.p_id = treat.p_id
')->where(["treat.p_id = '{$_GET['p_id']}'"])->orderBy('treat.t_no DESC')->one();
}
?>
