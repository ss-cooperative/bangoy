<table id="muti_section9_1" class="table">
    <thead>
        <tr>
            <td align="center"><b>ลำดับ</b></td>
            <td align="center"><b>ตัวยา</b></td>
            <td align="center"><b>จำนวน</b></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php 
        //print_r($res_paymedicine);
        foreach ($res_paymedicine as $key => $val): ?>
        <tr>
            <td align="center"><?=($key+1)?></td>
            <td><?=$val->m_name?></td>
            <td ><?=$val->pay_amount?>"></td>
            <td align="center"></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
