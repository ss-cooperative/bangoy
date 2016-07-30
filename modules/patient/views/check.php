<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.patient
 */-->


<form class="" action="" method="get">
    <?= genGetHidden() ?>
    <div class="row">
        <div class="col-sm-1">
            <div class="form-group">
                <label> ค้นหา : </label>
            </div>
        </div>
        <div class="col-sm-2">
            <input class="form-control" type="text" name="p_id" placeholder="รหัสผู้ป่วย">
        </div>
        <div class="col-sm-3">
            <input class="form-control" type="text" name="p_name"  placeholder="ชื่อ">

        </div>
        <div class="col-sm-3">
            <input class="form-control" type="text" name="p_surname"  placeholder="สกุล">

        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <input type="submit" name="search" value="ค้นหา" class="btn btn-success" >
            </div>
        </div>
    </div>

</form>


<?php
if (isset($_GET['search'])) {
    include '_patient.php';
} else {
    include '_qqq.php';
}
?>