<?php

$data = $db->select('medicine')->where(["m_id = '{$_GET['id']}'"])->one();
