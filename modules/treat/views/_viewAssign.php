<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */-->
 
<form class="" action="" method="POST">
<input type="hidden" name="r" value="treat/heal">
<input type="hidden" name="p_id"  value="<?=(isset($_GET['p_id'])?$_GET['p_id']:'')?>">
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

    
    
    
    
    
    
    <?php
    if($res_patient->t_no){
        include '_tab.php'; 
    ?>
    
    
    
    <br/>

    <input type="submit" name="update" value="บันทึก" class="btn btn-success">
    
    <input type="submit" name="finish" value="เรียบร้อย" class="btn btn-primary">

    <input  type="hidden" name="t_no" value="<?= $res_patient->t_no ?>">
    
    <?php }?>

</form>
