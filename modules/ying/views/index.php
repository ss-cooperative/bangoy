
<a href="index.php?r=ying/create" class="btn btn-success"> เพิ่มข้อมูล</a>


<table class="table">
  <tr>
    <td>
      Id
    </td>
    <td>
      Name
    </td>
    <td>
      Action
    </td>
  </tr>

  <?php
  foreach($data as $val){
?>
<tr>
  <td>
    <?=$val->id?>
  </td>
  <td>
    <?=$val->name?>
  </td>
  <td>
    <a href="index.php?r=ying/update&id=<?=$val->id?>">Upadate</a> | <a href="index.php?r=ying/delete&id=<?=$val->id?>" onclick="return confirm('แน่ใจที่จะลบ ?')">ลบ</a>
  </td>
</tr>
  <?php } ?>
</table>
