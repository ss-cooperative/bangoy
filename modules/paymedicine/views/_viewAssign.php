<form class="" action="" method="POST">
    <input type="hidden" name="r" value="treat/heal">
    <input type="hidden" name="p_id"  value="<?= (isset($_GET['p_id']) ? $_GET['p_id'] : '') ?>">
    <div class="row">

        <div class="col-sm-3">
            <div class="form-group">
                <label>น้ำหนัก</label> <?= $res_patient->t_wieght ?>
            </div>
        </div>


        <div class="col-sm-3">
            <div class="form-group">
                <label>ส่วนสูง</label> <?= $res_patient->t_hight ?>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>ความดัน</label> <?= $res_patient->pressure ?>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>อุณหภูมิ</label> <?= $res_patient->temp ?>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-12 fa-">
            <div class="form-group">
                <label>อาการเบื้องต้น</label>
                <?= $res_patient->symptom ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label> ผลการวินิจฉัย </label>
                <?= $res_patient->resultjude ?>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-3">
            <div class="form-group">
                <label>วันที่ เวลาที่นัด</label>
                <?= DateTimeThai($res_app->app_date . ' ' . $res_app->app_time) ?>
            </div>
        </div>  

        <div class="col-sm-6">
            <div class="form-group">
                <label>เหตุผล</label>
                <?= $res_app->app_reason ?>
            </div>
        </div> 

    </div>

 <?php include '_medicine.php'; ?>




        <input type="submit" name="update" value="บันทึก" class="btn btn-success">

        <input type="submit" name="finish" value="เรียบร้อย" class="btn btn-primary">

        <input  type="hidden" name="t_no" value="<?= $res_patient->t_no ?>">

  

</form>
