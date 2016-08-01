<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */-->

<table class="table table-striped table-bordered table-hover dataTable no-footer">
  <tr>
    <td>#</td>
    <td>ชื่อยา</td>
    <td>จำนวน</td>    
    <td>จ่ายยาเมื่อ</td>    
  </tr>

  <?php
  foreach($data_paymedicine as $key=> $val){
?>
<tr>
  <td>
    <?=$key+1?>
  </td>
  <td>
    <a href="index.php?r=medicine/detail&id=<?=$val->m_id?>"><?=$val->m_name?></a>
  </td>
  <td>
    <?=$val->pay_amount?>
  </td>
  <td>
    <?=  DateThai($val->pay_date)?>
  </td>
</tr>
  <?php } ?>
</table>
