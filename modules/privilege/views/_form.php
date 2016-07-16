<form class="" action="" method="post">


<div class="form-group">
    <label>ข้อมูลสิทธิการรักษา</label>
    <input class="form-control" type="text" name="pv_id" value="<?=$data->pv_id?>">
    <p class="help-block">Example block-level help text here.</p>
</div>

รหัสสิทธิการรักษา
<input type="text" name="pv_id" value="<?=$data->pv_id?>"><br/>
ชื่อสิทธิการรักษา
<input type="text" name="pv_name" value="<?=$data->pv_name?>"><br/>
รายละเอียดสิทธิการรักษา
<input type="text" name="pv_detail" value="<?=$data->pv_detail?>"><br/>

<br/><br/>

<input type="submit" name="บันทึก" value="บันทึก">
<input type="submit" name="เพิ่ม" value="เพิ่ม">
<input type="submit" name="แก้ไข" value="แก้ไข">
<input type="submit" name="ยกเลิก" value="ยกเลิก">
<input type="submit" name="จบ" value="จบ">



</form>
