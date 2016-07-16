
<a href="index.php?r=appointment/create" class="btn btn-success"> จอง</a>


<table class="table">
  <tr>
    <td>
      Id
    </td>
    <td>
      Name
    </td>
    <td>
      จองเมื่อ
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
    <?=$val->p_id?>
  </td>
  <td>
    <?=$val->p_name." ". $val->p_surname?>
  </td>
  <td>
    <?=$val->app_date." ".$val->app_time?>
  </td>
  <td>
    <a href="index.php?r=ying/update&id=<?=$val->id?>">Upadate</a> | <a href="index.php?r=ying/delete&id=<?=$val->id?>" onclick="return confirm('แน่ใจที่จะลบ ?')">ลบ</a>
  </td>
</tr>
  <?php } ?>
</table>
