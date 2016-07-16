<?php

$data = $db->select('gecal_drugs')->where(["gc_id = '{$_GET['id']}'"])->one();
