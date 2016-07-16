<div class="row hidden-print">
    <form action="" method="post">
        <div class="col-sm-3">
            <div class="form-group">
                <label>วันที่</label>
                <input class="form-control" type="text" name="t_date_start"  id="t_date_start"  value="<?= $t_date_start ?>">
            </div>
        </div>  
        <div class="col-sm-3">
            <div class="form-group">
                <label>ถึงวันที่</label>
                <input class="form-control" type="text" name="t_date_end"  id="t_date_end" value="<?= $t_date_end ?>">
            </div>
        </div>  

        <div class="col-sm-3">
            <div class="form-group">
                <input type="submit" name="search" value="รายงาน" class="btn btn-success" >
            </div>
        </div>  
    </form>
</div>  

<div class="panel panel-default">
    <div class="panel-heading hidden-print">
        <?= $title ?>
        <div class="pull-right">
            <a onclick="window.print(); return false;" class="btn btn-default btn-xs"><i class="fa fa-print"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <div class="visible-print">
            <h2> <?= $title ?></h2>
            <p>
            <?= DateThai($t_date_start) ?> ถึง <?= DateThai($t_date_end) ?>
            </p>
        </div>
        <table class="table table-striped table-bordered table-hover dataTable no-footer">
            <tr>
                <td>รหัสผู้ป่วย</td>
                <td>ชื่อ-สกุล</td>
                <td>สิทธิการรักษา</td>
                <td>เมื่อ</td>

            </tr>

            <?php
            foreach ($data as $val) {
                ?>
                <tr>
                    <td>
                        <?= $val->p_id ?>
                    </td>
                    <td>
                        <?= $val->p_name . " " . $val->p_surname; ?>
                    </td>
                    <td>
                        <?= $val->resultjude ?>
                    </td>
                    <td>
                        <?= DateTimeThai($val->t_date) ?>
                    </td>

                </tr>
            <?php } ?>
        </table>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="js/datetimepicker-master/jquery.datetimepicker.css">

<script src="js/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
<script type="text/javascript">
                $(function () {
                    $('#t_date_start').datetimepicker({
                        format: 'Y-m-d'
                    });
                    $('#t_date_end').datetimepicker({
                        format: 'Y-m-d'
                    });
                });
</script>