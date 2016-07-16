<div class="panel panel-default">
    <div class="panel-heading">
        <?= $title ?>

    </div>
    <div class="panel-body">
        <label style="width: 180px;" class="text-right">รหัสยา-เวชภัณฑ์ </label> <?= $data->m_id ?> <br/>
        <label style="width: 180px;" class="text-right">ยาเวชภัณฑ์</label> <?= $data->m_name ?> <br/>
        <label style="width: 180px;" class="text-right">ปริมาตรต่อหน่วยบรรจุ</label> <?= $data->m_volome ?> <br/>
        <label style="width: 180px;" class="text-right">ชนิดยา</label> <?= $data->m_type ?> <br/>
        <label style="width: 180px;" class="text-right">หน่วยบรรจุ</label> <?= $data->m_unit ?> <br/>
        <label style="width: 180px;" class="text-right">จำนวนต่อหน่วย</label> <?= $data->m_per_unit ?> <br/>
        <label style="width: 180px;" class="text-right">จำนวน</label> <?= $data->m_amount ?> <br/>
        <label style="width: 180px;" class="text-right">ราคาต่อหน่วย</label> <?= $data->m_price ?> <br/>
        <label style="width: 180px;" class="text-right">จุดสั่ง</label> <?= $data->m_stock ?> <br/>
        <label style="width: 180px;" class="text-right">รายละเอียดยา-เวชภัณฑ์</label> <?= $data->m_detail ?> <br/>
        <label style="width: 180px;" class="text-right">วันหยุดอายุ</label> <?= $data->m_exp ?>
    </div>
</div>

