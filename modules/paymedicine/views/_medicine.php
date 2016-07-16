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
        foreach ($res_paymedicine as $val): ?>
        <tr>
            <td align="center"></td>
            <td>
                <div class="form-group">
                    <select name="m_id[]" class="form-control select-ajax" style="width: 100%;">
                        <option value="">เลือกตัวยา</option>
                        <?php foreach ($res_medicine as $med):?>
                        <option value="<?=$med->m_id?>" <?=($med->m_id==$val->m_id)?'selected':''?>><?=$med->m_name?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </td>
            <td >
                <div class="form-group">
                    <input type="text" name="pay_amount[]" id="responsible_agencies"  class="form-control" value="<?=$val->pay_amount?>">
                </div>
            </td>
            <td align="center"></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
