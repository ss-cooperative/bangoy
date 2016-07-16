<?php

$data = $db->select('qqq')->where(["qid = '{$_GET['id']}'"])->one();
