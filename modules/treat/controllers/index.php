<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */
$title='ตรวจรักษา/นัดหมายจากอาการเบื้ยงต้น';

$res_qqq = $db->sql("SELECT
treat.symptom,
patient.p_name,
patient.p_surname,
qqq.qno,
qqq.qsurname,
qqq.qname,
patient.p_id
FROM
qqq
LEFT JOIN patient ON patient.p_id = qqq.p_id
LEFT JOIN treat ON treat.p_id = qqq.p_id
")->where([
    'qqq.qstatus=2',
    'DATE(qqq.qdate) = CURDATE()',
    //"TIME(qqq.qdate) >= '8:30:00'"
    ])->orderBy('qqq.qno ASC')->all();
//echo $db->sql;
//exit();
