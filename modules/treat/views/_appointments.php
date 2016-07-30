<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */-->
 
<link rel="stylesheet" type="text/css" href="js/datetimepicker-master/jquery.datetimepicker.css">
<br />
<div class="row">

    <div class="col-sm-3">
        <div class="form-group">
            <label>วันที่ เวลาที่นัด</label>
            <input class="form-control" type="text" name="app_date" value="<?= $res_app->app_date . ' ' . $res_app->app_time ?>" id="datetimepicker_format" >
        </div>
    </div>  

    <div class="col-sm-6">
        <div class="form-group">
            <label>เหตุผล</label>
            <input class="form-control" type="text" name="app_reason" value="<?= $res_app->app_reason ?>"  >
        </div>
    </div> 

</div>


<script src="js/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
<script type="text/javascript">
    $(function () {

        $('#datetimepicker_format').datetimepicker({
            format: 'Y-m-d H:i:s'
        });

    });
</script>