<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.report
 */-->


<div class="row hidden-print">
    <form action="" method="post">
        <div class="col-sm-3">
            <div class="form-group">
                <label>วันที่</label>
                <input class="form-control" type="text" name="t_date_start"  id="t_date_start"  value="<?= convDateThToWidget($t_date_start) ?>">
            </div>
        </div>  
        <div class="col-sm-3">
            <div class="form-group">
                <label>ถึงวันที่</label>
                <input class="form-control" type="text" name="t_date_end"  id="t_date_end" value="<?= convDateThToWidget($t_date_end) ?>">
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
        &nbsp;
        <div class="pull-right">
            <a onclick="window.print();
                    return false;" class="btn btn-default btn-xs"><i class="fa fa-print"></i></a>
        </div>
    </div>
    <div class="panel-body">

        <h2> <?= $title ?></h2>
         <p>
            <?= DateThaiFull($t_date_start) ?> ถึง <?= DateThaiFull($t_date_end) ?>
        </p>

        <table class="table table-striped table-bordered table-hover dataTable no-footer">
            <tr>
                <td>รหัสยา</td>
                <td>ชื่อยา</td>
                <td>จำนวนยาที่เหลือ</td>
            </tr>

            <?php
            //print_r($data);
            foreach ($data as $val) {
                if ($val->m_id):
                    ?>
                    <tr>
                        <td>
                            <?= $val->m_id ?>
                        </td>
                        <td>
                            <?= $val->m_name; ?>
                        </td>
                        <td>
                            <div class="hidden-print">
                                <a href="?r=medicine/detail&m_id=<?= $val->m_id ?>" >
                                    <?= $val->m_amount - $val->orders ?>
                                </a>
                            </div>
                            <div class="visible-print">
                                <?= $val->m_amount - $val->orders ?>
                            </div>
                        </td>
                    </tr>
                <?php endif;
            }
            ?>
        </table>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="js/bootstrap-datepicker/css/bootstrap-datepicker.css">

<script src="js/bootstrap-datepicker-thai-thai/js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-datepicker-thai-thai/js/bootstrap-datepicker-thai.js"></script>
<script src="js/bootstrap-datepicker-thai-thai/js/locales/bootstrap-datepicker.th.js"></script>

<script type="text/javascript">
                $(function () {
                    $('#t_date_start').datepicker({
                        autoclose: true,
                        format: 'dd-mm-yyyy',
                        language: 'th-th'
                    });
                    $('#t_date_end').datepicker({
                        autoclose: true,
                        format: 'dd-mm-yyyy',
                        language: 'th-th'
                    });
                });
</script>