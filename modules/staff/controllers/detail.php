<?php

$data = $db->select('staff')->where(["s_id = '{$_GET['id']}'"])->one();
