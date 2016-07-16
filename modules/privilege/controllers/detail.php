<?php

$data = $db->select('privilege')->where(["pv_id = '{$_GET['id']}'"])->one();
