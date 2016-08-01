<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */

$title = "โรงพยาบาลส่งเสริมสุภาพตำบลบาโงย";

$query = $db->select('booking')->all();


$res_appointment = $db->sql("SELECT * FROM `appointment` INNER JOIN patient ON patient.p_id = appointment.p_id WHERE appointment.app_status=1")->all();

$res_qqq = $db->sql("SELECT * FROM `qqq` LEFT JOIN patient ON patient.p_id = qqq.p_id")->where([
    'qqq.qstatus=1',
    'DATE(qqq.qdate) = CURDATE()',
    //"TIME(qqq.qdate) >= '8:30:00'"
    ])->orderBy('qqq.qno ASC')->all();
//echo $db->sql;
