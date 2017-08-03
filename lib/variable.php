<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package lib.variable
 */

######## คำนำหน้า
$prefix = [];
$prefix['Mr.'] = 'นาย';
$prefix['Mrs.'] = 'นาง';
$prefix['Ms.'] = 'นางสาว';

######## เพศ
$sex = [];
$sex[] = ['sex' => 'm', 'title' => 'ชาย'];
$sex[] = ['sex' => 'f', 'title' => 'หญิง'];



######## สถานภาพ
$p_status = [];
$p_status[] = ['id' => 1, 'title' => 'โสด'];
$p_status[] = ['id' => 2, 'title' => 'สมรส'];
$p_status[] = ['id' => 3, 'title' => 'หม้าย'];
$p_status[] = ['id' => 4, 'title' => 'หย่าร้าง'];

######## สถานการจ่ายยา
$pay_status = [];
$pay_status[1] = 'ยังไม่ได้จ่ายยา';
$pay_status[2] = 'จ่ายยาแล้ว';



