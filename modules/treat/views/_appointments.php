<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */-->

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


<link rel="stylesheet" type="text/css" href="js/bootstrap-datetimepicker-master/sample in bootstrap v3/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css">

<script type="text/javascript" src="js/bootstrap-datetimepicker-master/sample in bootstrap v3/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js" ></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.th.js" ></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker_format').datetimepicker({
            autoclose: true,
            //format: 'dd-mm-yyyy',
            language: 'th-th'
        });

    });
</script>