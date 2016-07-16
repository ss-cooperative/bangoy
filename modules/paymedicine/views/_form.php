<form class="" action="" method="post">


<div class="form-group">
    <label>ข้อมูลยา-เวชภัณฑ์</label>
    <input class="form-control" type="text" name="m_id" value="<?=$data->m_id?>">
    <p class="help-block">Example block-level help text here.</p>
</div>

รหัสยา-เวชภัณฑ์
<input type="text" name="m_id" value="<?=$data->m_id?>"> <br/><br/>
ยา-เวชภัณฑ์
<input type="text" name="m_name" value="<?=$data->m_name?>"> <br/><br/>
ปริมาตรต่อหน่วยบรรจุ
<input type="text" name="m_volume" value="<?=$data->m_volume?>"> <br/><br/>
ชนิดยา
<input type="text" name="m_type" value="<?=$data->m_type?>"> <br/><br/>
หน่วยบรรจุ
<input type="text" name="m_unit" value="<?=$data->m_unit?>"> <br/><br/>
จำนวนต่อหน่วย
<input type="text" name="m_per_unit" value="<?=$data->m_per_unit?>"> <br/><br/>
จำนวน
<input type="text" name="m_amount" value="<?=$data->m_amount?>"> <br/><br/>
ราคาต่อหน่วย
<input type="text" name="m_price" value="<?=$data->m_price?>"><br/><br/>
จุดสั่ง
<input type="text" name="m_stock" value="<?=$data->m_stock?>"> <br/><br/>
รายละเอียดยา-เวชภัณฑ์
<input type="text" name="m_detail" value="<?=$data->m_detail?>"><br/><br/>
วันหมดอายุ
<input type="text" name="m_exp" value="<?=$data->m_exp?>">


<br/><br/>

<input type="submit" name="บันทึก" value="บันทึก">

</form>
