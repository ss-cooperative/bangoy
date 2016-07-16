<?php

$data = $db->select('medicine')->where(["m_id = '{$_GET['id']}'"])->one();
$title = 'ข้อมูลยา-เวชภัณฑ์ : ';
$title.=$data->m_name;