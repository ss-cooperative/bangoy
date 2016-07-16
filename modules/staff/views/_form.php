<form class="" action="" method="post">


<div class="form-group">
    <label>ข้อมูลเจ้าหน้าที่สาธารณสุข/พยาบาล</label>
    <input class="form-control" type="text" name="s_id" value="<?=$data->s_id?>">
    <p class="help-block">Example block-level help text here.</p>
</div>

รหัสเจ้าหน้าที่/พยาบาล
<input type="text" name="s_id" value="<?=$data->s_id?>"> <br/><br/>
ชื่อ-สกุล เจ้าหน้าที่/พยาบาล
<input type="text" name="s_name" value="<?=$data->s_name?>">
เลขบัตรประชาชน
<input type="text" name="s_nid" value="<?=$data->s_nid?>"> <br/><br/>
เพศ
<input type="text" name="s_sex" value="<?=$data->s_sex?>">
ตำแหน่ง
<input type="text" name="s_position" value="<?=$data->s_position?>"> <br/><br/>
ที่อยู่
<input type="text" name="s_address" value="<?=$data->s_address?>">
การศึกษา
<input type="text" name="s_education" value="<?=$data->s_education?>"><br/><br/>
ประสบการณ์
<input type="text" name="s_experience" value="<?=$data->s_experience?>">
เบอร์โทรศัพท์
<input type="text" name="s_tel" value="<?=$data->s_tel?>"><br/><br/>
รูปเจ้าหน้าที่/พยาบาล
<input type="text" name="s_pic" value="<?=$data->s_pic?>">
สถานะเจ้าหน้าที่/พยาบาล
<input type="text" name="s_per" value="<?=$data->s_per?>"><br/><br/>

<br/><br/>

<input type="submit" name="บันทึก" value="บันทึก">
<input type="submit" name="เพิ่ม" value="เพิ่ม">
<input type="submit" name="แก้ไข" value="แก้ไข">
<input type="submit" name="ยกเลิก" value="ยกเลิก">
<input type="submit" name="จบ" value="จบ">



</form>
