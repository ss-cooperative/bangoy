<?php
$privilege = $db->select("privilege")->all();
?>


<form class="" action="" method="post">
    <div class="row">
        <div class="col-sm-3">
            <img src="#" width="100%" height="200"/>
        </div>

        <div class="col-sm-9">
            <div class="row">
<!--                <div class="col-sm-3">
                    <div class="form-group">
                        <label>รหัสผู้ป่วย</label>
                        <input class="form-control" type="text" name="p_id" value="<?= $data->p_id ?>">
                    </div>
                </div>-->
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>สิทธิการรักษา</label>                        
                        <select class="form-control" name="pv_id" value="<?= $data->pv_id ?>">
                            <option value="" >เลือกสิทธิ</option>
                            <?php foreach ($privilege as $val):?>
                            <option value="<?=$val->pv_id?>" <?=($data->pv_id==$val->pv_id)?'selected':''?>><?=$val->pv_name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>ชื่อ</label>
                        <input class="form-control" type="text" name="p_name" value="<?= $data->p_name ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>นามสกุล</label>
                        <input class="form-control" type="text" name="p_surname" value="<?= $data->p_surname ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>เลขบัตรประชาชน</label>
                        <input class="form-control" type="text" name="p_nid" value="<?= $data->p_nid ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>วัน/เดือน/ปีเกิด</label>
                        <input class="form-control" type="text" name="p_birthday" value="<?= $data->p_birthday ?>">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>อายุ</label>
                        <input class="form-control" type="text" name="p_age" value="<?= $data->p_age ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>เพศ</label><br>                                             
                        
                        <?php foreach ($sex as $val):?>
                        <input name="p_sex" type="radio" id="p_sex<?=$val['sex']?>" value="<?=$val['sex']?>" <?=($val['sex']==$data->p_sex)?'checked':''?> />
                        <label for ="p_sex<?=$val['sex']?>"><?=$val['title']?></label>
                        <?php endforeach;?>
                        

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>สัญชาติ</label>
                        <input class="form-control" type="text" name="p_national" value="<?= $data->p_national ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>สถานภาพ</label>
                       
                        
                        
                        <select class="form-control" name="p_status" value="<?= $data->p_status ?>">
                            <option value="" >เลือกสถานภาพ</option>
                            <?php foreach ($p_status as $val):?>
                            <option value="<?=$val['id']?>" <?=($data->p_status==$val['id'])?'selected':''?>><?=$val['title']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>


                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>ที่อยู่</label>

                        <textarea class="form-control" rows="3" name="p_address"><?= $data->p_address ?></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>เบอร์โทรศัพท์</label>
                        <input class="form-control" type="text" name="p_tel" value="<?= $data->p_tel ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>น้ำหนัก</label>
                        <input class="form-control" type="text" name="p_wieght" value="<?= $data->p_wieght ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>ส่วนสูง</label>
                        <input class="form-control" type="text" name="p_hight" value="<?= $data->p_hight ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>โรคประจำตัว</label>
                        <input class="form-control" type="text" name="disease" value="<?= $data->disease ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>กรุ๊ปเลือด</label>
                        <input class="form-control" type="text" name="blood" value="<?= $data->blood ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>แพ้ยา</label>
                        <input class="form-control" type="text" name="allergic" value="<?= $data->allergic ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>ผู้ที่ติดต่อในกรณีฉุกเฉิน</label>
                        <input class="form-control" type="text" name="delegate" value="<?= $data->delegate ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>เบอร์โทรผู้ติดต่อ</label>
                        <input class="form-control" type="text" name="delegate_tel" value="<?= $data->delegate_tel ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>ความสัมพันธ์</label>
                        <input class="form-control" type="text" name="relationship" value="<?= $data->relationship ?>">
                    </div>
                </div>
            </div>

            <br/>

            <input type="submit" name="ok" value="บันทึก" class="btn btn-success">

          
        </div>
    </div>  
</form>