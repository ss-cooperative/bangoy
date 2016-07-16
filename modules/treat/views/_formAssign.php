<form class="" action="" method="POST">


    <div class="row">

        <div class="col-sm-3">
            <div class="form-group">
                <label>น้ำหนัก</label><input class="form-control" type="text" name="t_wieght" value="<?= $res_patient->t_wieght ?>">
            </div>
        </div>


        <div class="col-sm-3">
            <div class="form-group">
                <label>ส่วนสูง</label>
                <input class="form-control" type="text" name="t_hight" value="<?= $res_patient->t_hight ?>">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>ความดัน</label>
                <input class="form-control" type="text" name="pressure" value="<?= $res_patient->pressure ?>">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>อุณหภูมิ</label>
                <input class="form-control" type="text" name="temp" value="<?= $res_patient->temp ?>">
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-12 ">
            <div class="form-group">
                <label>อาการเบื้องต้น</label>
                <textarea class="form-control" name="symptom" rows="6"><?= $res_patient->symptom ?></textarea>
            </div>
        </div>
    </div>

    
    
    
    
    <br/>

    <input type="submit" name="<?= $res_patient->t_no ? 'update' : 'save' ?>" value="บันทึก" class="btn btn-success">

    <?php if ($res_patient->t_no): ?>
        <input  type="hidden" name="t_no" value="<?= $res_patient->t_no ?>">
    <?php else: ?>
        <input  type="hidden" name="p_id" value="<?= $res_patient->p_id ?>">
    <?php endif;
    ?>

</form>
