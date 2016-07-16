
<a href="index.php?r=staff/create" class="btn btn-success"> เพิ่มข้อมูล</a>


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
    <?=$val->s_id?>
  </td>
  <td>
    <a href="index.php?r=staff/detail&id=<?=$val->s_id?>"><?=$val->s_name?></a>
  </td>
  <td>
    <a href="index.php?r=staff/update&id=<?=$val->s_id?>">Upadate</a>
    <a href="index.php?r=staff/delete&id=<?=$val->s_id?>" onclick="return confirm('แน่ใจที่จะลบ ?')">ลบ</a>
  </td>
</tr>
  <?php } ?>
</table>
