<table id="muti_section9_1" class="table table-striped table-bordered">
    <thead>
        <tr>
            <td width="30" ><b>#</b></td>
            <td ><b>ตัวยา</b></td>
            <td ><b>จำนวน</b></td>
            <td  width="200"><b>รวม</b></td>
            <td  width="200"><b>สถานะ</b></td>
        </tr>
    </thead>
    <tbody>
        <?php
        //print_r($res_paymedicine);
        $total = 0;
        $status = 1;
        foreach ($res_paymedicine as $key => $val):
            $sum = $val->pay_amount * $val->m_price;
            $total+=$sum;
            $status = ($status<$val->pay_status)?$val->pay_status:$status;
            ?>
            <tr>
                <td ><?= ($key + 1) ?></td>
                <td><?= $val->m_name ?></td>
                <td ><?= number_format($val->pay_amount,0,'.',',') ?></td>
                <td ><?= number_format($sum,2,'.',',')?></td>
                <td ><?= $pay_status[$val->pay_status]?></td>
            </tr>
        <?php endforeach; 
        ?>
    <tfoot>
        <tr>
            <td colspan="3" class="text-right">รวมทั้งหมด</td>
            <td colspan="2"><?=$total?></td>
        </tr>
    </tfoot>
            
    </tbody>
</table>
