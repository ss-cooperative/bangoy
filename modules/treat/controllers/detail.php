<?php

$data = $db->select('treat')->where(["t_no = '{$_GET['t_no']}'"])->one();
