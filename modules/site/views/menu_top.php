<?php

$user = $db->select('user')->where(["id={$_SESSION['user_id']}"])->one();
$arrMenu = [];
$arrMenu[]=['title'=>'<i class="fa fa-home"></i> Home','rout'=>'index.php'];
//$arrMenu[]=['title'=>'ทดสอบ','rout'=>'index.php?r=test'];
//$arrMenu[]=['title'=>'ตัวอย่างทั้งหมด','rout'=>'index.php?r=ying'];
$arrMenu[]=['title'=>'ข้อมูลผู้ป่วย','rout'=>'index.php?r=patient'];
$arrMenu[]=['title'=>'ข้อมูลผู้ป่วย','rout'=>'index.php?r=patient'];
$arrMenu[]=['title'=>'ข้อมูลผู้ป่วย','rout'=>'index.php?r=patient'];


?>
<!-- side-menu -->
<ul >

    <?php
    foreach ($arrMenu as $menu):?>
    <li class="<?=$menu['selected']?> btn btn-success">
        <a href="<?=$menu['rout']?>"><?=$menu['title']?></a>
    </li>
    <?php    endforeach;?>
</ul>
<!-- end side-menu -->
