<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package lib.rout
 */
$title = 'สหกรณ์ออมทรัพย์ SSUP GROUP';
$content = '';
if (isset($_GET['r'])) {
    @list($module, $action) = @explode('/', $_GET['r']);
    $action = empty($action) ? 'index' : $action;
    if (is_dir('modules/' . $module)) {
        include_once('modules/' . $module . '/controllers/' . $action . '.php');
        ob_start();
        if(file_exists(('modules/' . $module . '/views/' . $action . '.php')))
        include_once('modules/' . $module . '/views/' . $action . '.php');
        $content = ob_get_contents();
        ob_end_clean();
    } else {
        ob_start();
        include_once('modules/site/views/err404.php');
        $content = ob_get_contents();
        ob_end_clean();
    }
} else {
    include_once('modules/site/controllers/index.php');
    ob_start();
    include_once('modules/site/views/index.php');
    $content = ob_get_contents();
    ob_end_clean();
}

if (isset($_GET['ajax'])) {
    echo $content;
    exit();
}