<?php

/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */
$data = $db->select('medicine')->where(["m_id = '{$_GET['m_id']}'"])->one();
$title = 'ข้อมูลยา-เวชภัณฑ์ : ';
$title.=$data->m_name;


$paymedicine = $db->sql("SELECT * FROM paymedicine ")->where(["m_id = '{$_GET['m_id']}'"])->all();
