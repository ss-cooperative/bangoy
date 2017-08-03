<?php
/**
 * Mini MVC Bangory
 * 
 * LICENSE: โปรเจ็คระบบจัดการนี้ สร้างขึ้นเพื่อการนำเสนอโปรเจ็คการเรียนในวิชาเท่านั้น
 * ไม่สามารถนำไปเผยแพร่ได้ก่อนจะได้รับอนุญาตจากเจ้าผู้พัฒนาระบบโดยตรง 
 * มิเช่นนั้นจะขอดำเนินคดีทางกฎหมายตาม พรบ.ลิขสิทธิ์ (ฉบับที่ 2) พ.ศ. 2558 หากสนใจ
 * สามารถติดต่อได้ที่ ahamad.jedu@gmail.com
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package index
 */

date_default_timezone_set("Asia/Bangkok");
session_start();

error_reporting(E_ERROR | E_PARSE);
/**
 * connect db
 */
define('host','localhost');
define('dbname','new_coop_db');
define('username','root');
define('password','');

/**
 * theme
 */
define('_theme','bs-siminta-admin');

/*
 * Path Upload
 */
define('_pathUpload','uploads/');
define('js','js/');
