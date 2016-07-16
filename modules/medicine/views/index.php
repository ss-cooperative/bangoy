
<a href="index.php?r=medicine/create" class="btn btn-success"> เพิ่มข้อมูล</a>


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
    <?=$val->m_id?>
  </td>
  <td>
    <a href="index.php?r=medicine/detail&id=<?=$val->m_id?>"></a>
  </td>
  <td>
    <a href="index.php?r=medicine/update&id=<?=$val->m_id?>">Upadate</a>
    <a href="index.php?r=medicine/delete&id=<?=$val->m_id?>" onclick="return confirm('แน่ใจที่จะลบ ?')">ลบ</a>
  </td>
</tr>
  <?php } ?>
</table>
