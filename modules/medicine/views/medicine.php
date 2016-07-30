<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.report
 */-->


<table class="table table-striped table-bordered table-hover dataTable no-footer">
    <tr>
        <td>จ่ายเมื่อ</td>
        <td>จำนวนที่จ่าย</td>
    </tr>

    <?php
    foreach ($paymedicine as $val) {
        ?>
        <tr>
            <td>
                <?= DateTimeThai($val->pay_date); ?>
            </td>
            <td>                
                <?= $val->pay_amount ?>                
            </td>
        </tr>
    <?php } ?>
</table>

