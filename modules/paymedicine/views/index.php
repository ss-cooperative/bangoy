<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.paymedicine
 */-->

<form class="" action="" method="get">
    <input type="hidden" name="r" value="paymedicine/index">
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group text-right">
                <label>ค้นหาจาก :</label>
            </div>
        </div>
        <div class="col-sm-3">
            <input class="form-control" type="text" name="p_id" placeholder="รหัสผู้ป่วย" value="<?=(isset($_GET['p_id'])?$_GET['p_id']:'')?>">
        </div>
        
        <div class="col-sm-3">
            <input class="form-control" type="text" name="t_no" placeholder="การรักษา" value="<?=(isset($_GET['t_no'])?$_GET['t_no']:'')?>">
        </div>
        
        <div class="col-sm-3">
            <div class="form-group">
                <input type="submit" name="search" value="ค้นหา" class="btn btn-success" >
            </div>
        </div>
    </div>

</form>


<div class="panel panel-default">
    <div class="panel-heading">
        <?= $title ?>
    </div>
    <div class="panel-body">

        <table class="table">
            <tr>
                <td>#</td>
                <td>รหัสการรักษา</td>
                <td>รหัสผู้ป่วย</td>
                <td>ชื่อ-สกุลผู้ป่วย</td>
                <td>รักษาเมื่อ</td>
                <td>สถานะ</td>
                <td></td>
            </tr>

            <?php
            foreach ($data as $key =>$val) {
                ?>
                <tr>
                    <td><?= ($key+1) ?></td>
                    <td><?= $val->t_no ?></td>
                    <td><?= $val->p_id ?></td>
                    <td>
                        <a href="index.php?r=paymedicine/confirm&t_no=<?= $val->t_no ?>"><?=$val->p_name.' '.$val->p_surname?> </a>
                    </td>
                    <td>
                        <?= DateTimeThai($val->t_date)?>
                    </td>
                    <td>
                        <?= $pay_status[$val->pay_status]?>
                    </td>
                    <td>
                        <a href="index.php?r=paymedicine/confirm&t_no=<?= $val->t_no ?>" class="btn btn-primary">ตรวจสอบ</a>
                        
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?= $page['widget']; ?>
    </div>
</div>