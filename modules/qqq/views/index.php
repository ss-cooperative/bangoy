
<a href="index.php?r=qqq/create" class="btn btn-success"> เพิ่มข้อมูล</a>


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
    <?=$val->qid?>
  </td>
  <td>
    <a href="index.php?r=qqq/detail&id=<?=$val->qid?>"></a>
  </td>
  <td>
    <a href="index.php?r=qqq/update&id=<?=$val->s_id?>">Upadate</a>
    <a href="index.php?r=qqq/delete&id=<?=$val->s_id?>" onclick="return confirm('แน่ใจที่จะลบ ?')">ลบ</a>
  </td>
</tr>
  <?php } ?>
</table>
