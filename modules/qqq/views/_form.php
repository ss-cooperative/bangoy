<form class="" action="" method="post">


<div class="form-group">
    <label>ข้อมูลลำดับการเข้ารับบริการ</label>
    <input class="form-control" type="text" name="qid" value="<?=$data->qid?>">
    <p class="help-block">Example block-level help text here.</p>
</div>

รหัสลำดับ
<input type="text" name="qid" value="<?=$data->qid?>"> <br/><br/>
ชื่อผู้เข้ารับบริการ
<input type="text" name="qname" value="<?=$data->qname?>"> <br/><br/>
สถานะ
<input type="text" name="qstatus" value="<?=$data->qstatus?>"> <br/><br/>
วันที่จัดลำดับ
<input type="text" name="qdate" value="<?=$data->qdate?>">


<br/><br/>

<input type="submit" name="บันทึก" value="บันทึก">


</form>
