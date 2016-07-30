<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */

$query = $db->select('patient');

if(isset($_GET['search'])){
    $where = [];
    $where[] = $_GET['p_id']?"p_id LIKE '%".$_GET['p_id']."%'":'';
    $where[] = $_GET['p_name']?"p_name LIKE '%".$_GET['p_name']."%' ":'';
    $where[] = $_GET['p_surname']?"p_surname LIKE '%".$_GET['p_surname']."%' ":'';
    $where = array_filter($where);
    //print_r($where);
    $query = $where?$query->where($where):$query;
    //echo $query->sql;
}

$page = pagination(25,$query->count());
$data = $query->limit($page['start'],$page['size'])->all();

