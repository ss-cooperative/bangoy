<?php

$a="ระบบจอง";
$data = $db->sql("SELECT * FROM `appointment`INNER JOIN patient ON patient.p_id = appointment.p_id ")->all();
 ?>
