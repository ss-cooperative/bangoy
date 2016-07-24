<?php
/**
 * Router
 * @author My Name
 * @author My Name <my.name@example.com>
 */
$title = 'โรงพยาบาลส่งเสริมสุขภาพตำบลบาโงย';
$content = '';
if (isset($_GET['r'])) {
    @list($module, $action) = @explode('/', $_GET['r']);
    $action = empty($action) ? 'index' : $action;
    if (is_dir('modules/' . $module)) {
        include_once('modules/' . $module . '/controllers/' . $action . '.php');
        ob_start();
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