<form class="" action="" method="post">


<div class="form-group">
    <label>ข้อมูลการตัดสต๊อก</label>
    <input class="form-control" type="text" name="gc_id" value="<?=$data->gc_id?>">
    <p class="help-block">Example block-level help text here.</p>
</div>

รหัสตัดสต๊อก
<input type="text" name="gc_id" value="<?=$data->gc_id?>"> <br/><br/>
รหัสยา-เวชภัณฑ์
<input type="text" name="m_id" value="<?=$data->m_id?>">
จำนวนที่ตัดสต๊อก
<input type="text" name="gc_amount" value="<?=$data->gc_amount?>"> <br/><br/>
วันที่ตัดสต๊อก
<input type="text" name="gc_date" value="<?=$data->gc_date?>">
สาเหตุที่ตัดสต๊อก
<input type="text" name="gc_because" value="<?=$data->gc_because?>"> <br/><br/>
รหัสเจ้าหน้าที่
<input type="text" name="s_id" value="<?=$data->s_id?>">

<br/><br/>

<input type="submit" name="บันทึก" value="บันทึก">
<input type="submit" name="เพิ่ม" value="เพิ่ม">
<input type="submit" name="แก้ไข" value="แก้ไข">
<input type="submit" name="ยกเลิก" value="ยกเลิก">
<input type="submit" name="จบ" value="จบ">



</form>
