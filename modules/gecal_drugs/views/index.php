
<a href="index.php?r=gecal_drugs/create" class="btn btn-success"> เพิ่มข้อมูล</a>


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
    <?=$val->gc_id?>
  </td>
  <td>
    <a href="index.php?r=gecal_drugs/detail&id=<?=$val->gc_id?>"><?=$val->m_id?></a>
  </td>
  <td>
    <a href="index.php?r=gecal_drugs/update&id=<?=$val->gc_id?>">Upadate</a>
    <a href="index.php?r=gecal_drugs/delete&id=<?=$val->gc_id?>" onclick="return confirm('แน่ใจที่จะลบ ?')">ลบ</a>
  </td>
</tr>
  <?php } ?>
</table>
