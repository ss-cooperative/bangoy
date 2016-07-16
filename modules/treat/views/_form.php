<form class="" action="" method="POST">

  <div class="row">
    <div class="col-sm-2">
        <div class="form-group">
          <a href="index.php?r=บริการ&p_id=<?=$data->p_id?>"class="btn btn-succuss">บริการ</a>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
          <a href="index.php?r=วินิจฉัย+ยาและเวชภัณฑ์&p_id=<?=$data->p_id?>"class="btn btn-succuss">วินิจฉัย+ยาและเวชภัณฑ์</a>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
        <div class="form-group">
          <label>รหัสผู้ป่วย</label>
          <input class="form-control" type="text" name="p_id" value="<?=$data->p_id?>">
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group"><br>
          <input class="btn btn-success" type="submit" name="search_pid" value="ค้นหา">
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-3">
        <div class="form-group">
          <label>ชื่อ : <?=$data->p_name?> <?=$data->p_surname?></label>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
          <label>น้ำหนัก</label><input class="form-control" type="text" name="p_wieght" value="<?=$data->p_wieght?>">
        </div>
    </div>
  </div>

<div class="row">
  <div class="col-sm-3">
      <div class="form-group">
        <label>แพ้ยา</label>
        <input class="form-control" type="text" name="allergic" value="<?=$data->allergic?>">
      </div>
  </div>
  <div class="col-sm-3">
      <div class="form-group">
        <label>ส่วนสูง</label>
        <input class="form-control" type="text" name="p_hight" value="<?=$data->p_hight?>">
      </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-3">
      <div class="form-group">
        <label>โรคประจำตัว</label>
        <input class="form-control" type="text" name="disease" value="<?=$data->disease?>">
      </div>
  </div>
  <div class="col-sm-3">
      <div class="form-group">
        <label>ความดัน</label>
        <input class="form-control" type="text" name="pressure" value="<?=$data->pressure?>">
      </div>
  </div>
  </div>

  <div class="row">
    <div class="col-sm-3">
        <div class="form-group">
          <label>อาการเบื้องต้น</label>
          <input class="form-control" type="text" name="symptom" value="<?=$data->symptom?>">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
          <label>อุณหภูมิ</label>
          <input class="form-control" type="text" name="temp" value="<?=$data->temp?>">
        </div>
    </div>
    </div>

<br/>

<input type="submit" name="บันทึก" value="บันทึก">

<?php
$user = $db->select('user')->where(["id={$_SESSION['user_id']}"])->one();

$arrMenu = [];
$arrMenu[]=['title'=>'วินิจฉัย+ยาและเวชภัณฑ์','rout'=>'index.php?r=treat'];

?>

</form>
