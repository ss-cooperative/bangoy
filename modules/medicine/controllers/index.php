<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */

$title = 'ข้อมูลผู้ป่วย';

$query = $db->select('medicine');

if(isset($_GET['search'])){
    $where = [];
    $where[] = $_GET['p_id']?"p_id LIKE '%".$_GET['p_id']."%'":'';
    $where[] = $_GET['fname']?"p_name LIKE '%".$_GET['fname']."%' OR p_surname LIKE '%".$_GET['fname']."%'":'';
    $where = array_filter($where);
    //print_r($where);
    $query = $where?$query->where($where):$query;
    //echo $query->sql;
}

$page = pagination(25,$query->count());
$data = $query->limit($page['start'],$page['size'])->all();

 ?>
