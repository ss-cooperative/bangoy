<?php
$title = "ทดสอบ";
?>
<h1><?=$title?></h1>
<?php


$res = $db->select('booking')->where(['booking_id=1'])->one();
echo $res->booking_subject;

$res = $db->sql('select * from booking')->one();
echo $res->booking_subject;

if($db->insert('booking',[
  'booking_id'=>NULL,
  'booking_date_start'=>date("Y-m-d"),
  'booking_subject'=>'ทดสอบ2'
  ])){
  echo "เข้าแล้ว";
}
echo $db->lastInsertId();

if($db->update('booking',[
  'booking_date_start'=>date("Y-m-d"),
  'booking_subject'=>'ทดสอบ3'
],["booking_id = 1"],["booking_room_id is not null"])){
  echo "เข้าแล้ว";
}

if($db->delete('booking',["booking_id = 10"])){
  echo "ลบแล้ว";
}


 ?>
