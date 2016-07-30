<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */

$a="ระบบจอง";
$data = $db->sql("SELECT * FROM `appointment`INNER JOIN patient ON patient.p_id = appointment.p_id ")->all();
 ?>
