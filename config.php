<?php
date_default_timezone_set("Asia/Bangkok");
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE);
/**
 * connect db
 */
define('host','localhost');
define('dbname','hospital_db');
define('username','root');
define('password','5738980');

/**
 * theme
 */
define('_theme','bs-siminta-admin');
