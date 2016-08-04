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

    <div class="col-sm-2">
        <div class="form-group">
            <label>วันที่</label>
            <input class="form-control" type="text" name="app_date" value="<?= convDateThToWidget($res_app->app_date) ?>" id="datepicker_format" >
        </div>
    </div>  
    <div class="col-sm-2">
        <div class="form-group">
            <label>เวลาที่นัด</label>
            <input name="app_time" type="time" class="form-control input-small" value="<?= $res_app->app_time ?>">
        </div>
    </div>  

    <div class="col-sm-6">
        <div class="form-group">
            <label>เหตุผล</label>
            <input class="form-control" type="text" name="app_reason" value="<?= $res_app->app_reason ?>"  >
        </div>
    </div> 

</div>

<link rel="stylesheet" type="text/css" href="js/bootstrap-datepicker/css/bootstrap-datepicker.css">

<script src="js/bootstrap-datepicker-thai-thai/js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-datepicker-thai-thai/js/bootstrap-datepicker-thai.js"></script>
<script src="js/bootstrap-datepicker-thai-thai/js/locales/bootstrap-datepicker.th.js"></script>


<script type="text/javascript">
    $(function () {
        $('#datepicker_format').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy',
            language: 'th-th'
        });



    });
</script>