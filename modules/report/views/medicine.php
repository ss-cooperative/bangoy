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
        &nbsp;
        <div class="pull-right">
            <a onclick="window.print(); return false;" class="btn btn-default btn-xs"><i class="fa fa-print"></i></a>
        </div>
    </div>
    <div class="panel-body">
        
            <h2> <?= $title ?></h2>
             <p>
            <?= DateThai($t_date_start) ?> ถึง <?= DateThai($t_date_end) ?>
             </p>
       
        <table class="table table-striped table-bordered table-hover dataTable no-footer">
            <tr>
                <td>รหัสยา</td>
                <td>ชื่อยา</td>
                <td>จำนวนยาที่เหลือ</td>
            </tr>

            <?php
            foreach ($data as $val) {
                ?>
                <tr>
                    <td>
                        <?= $val->m_id ?>
                    </td>
                    <td>
                        <?= $val->m_name; ?>
                    </td>
                    <td>
                        <?= $val->m_amount - $val->orders ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="js/bootstrap-datepicker/css/bootstrap-datepicker.css">

<script src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
                $(function () {
                    $('#t_date_start').datepicker({
                        autoclose:true,
                        format: 'dd-mm-yyyy'
                    });
                    $('#t_date_end').datepicker({
                        autoclose:true,
                        format: 'dd-mm-yyyy'
                    });
                });
</script>