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
        <?php foreach ($res_paymedicine as $val): ?>
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

<link href="js/select2/css/select2.min.css" rel="stylesheet" />

<script type="text/javascript" src="js/multi_table.js"></script>
<script type="text/javascript" src="js/select2/js/select2.min.js"></script>
<script type="text/javascript" >
    var cont = '<tr><td align="center"></td><td><div class="form-group"><select name="m_id[]" class="form-control select-ajax" style="width: 100%;"><option value="">เลือกตัวยา</option></select></div></td><td ><div class="form-group"><input type="text" name="pay_amount[]" id="responsible_agencies"  class="form-control" /></div></td><td align="center"></td></tr>';
    $(function () {
        $.Multi_tb({
            Tb: $("table#muti_section9_1 tbody"),
            //InputChk: inputChk,
            Contents: cont
        });

        $('select').select2({
            ajax: {
                url: "index.php?r=medicine/data&ajax=1",
                dataType: 'json',
                delay: 250,
                processResults: function (data, params) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            },
            minimumInputLength: 1
        });
        //alert(555);
    });
</script>