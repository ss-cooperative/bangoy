<div class="panel panel-default">
    <div class="panel-heading">
        <?= $title ?>

        <div class="pull-right">
            <a href="index.php?r=patient/update&p_id=<?= $data->p_id ?>" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> แก้ไข</a>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <img src="#" width="100%" height="200"/>
            </div>

            <div class="col-sm-9">

                <table class="table">
                    <tr><th class="text-right" width="20%">รหัสผู้ปวย</th><td colspan="3"> <?= $data->p_id ?></td></tr>
                    <tr><th class="text-right" width="20%">สิทธิการรักษา</th><td colspan="3"> <?= findPrivilege($data->pv_id) ?></td></tr>
                    <tr><th class="text-right" width="20%">ชื่อ - สกุล</th><td colspan="3"> <?= $data->p_name ?> <?= $data->p_surname ?></td></tr>
                    <tr>
                        <th class="text-right" width="20%">เลขบัตรประชาชน</th>
                        <td> <?= $data->p_nid ?></td>
                        <th class="text-right" width="20%">วัน/เดือน/ปีเกิด</th>
                        <td > <?= $data->p_birthday ?></td>
                    </tr>

                    <tr>
                        <th class="text-right" width="20%">อายุ</th>
                        <td > <?= $data->p_age ?></td>
                        <th class="text-right" width="20%">เพศ</th>
                        <td > <?= $data->p_sex ?></td>
                    </tr>

                    <tr>
                        <th class="text-right" width="20%">สัญชาติ</th>
                        <td> <?= $data->p_national ?></td>
                        <th class="text-right" width="20%">สถานภาพ</th>
                        <td> <?= $data->p_status ?></td>
                    </tr>

                    <tr><th class="text-right" width="20%">ที่อยู่</th><td colspan="3"> <?= $data->p_address ?></td></tr>
                    <tr><th class="text-right" width="20%">เบอร์โทรศัพท์</th><td colspan="3"> <?= $data->p_tel ?></td></tr>
                    <tr><th class="text-right" width="20%">น้ำหนัก</th><td colspan="3"> <?= $data->p_wieght ?></td></tr>

                    <tr>
                        <th class="text-right" width="20%">โรคประจำตัว</th>
                        <td > <?= $data->disease ?> </td>
                        <th class="text-right" width="20%">กรุ๊ปเลือด</th>
                        <td > <?= $data->blood ?></td>
                    </tr>
                    <tr><th class="text-right" width="20%">แพ้ยา</th><td colspan="3"> <?= $data->allergic ?></td></tr>
                    <tr><th class="text-right" width="20%">ผู้ที่ติดต่อในกรณีฉุกเฉิน</th><td colspan="3"> <?= $data->delegate ?></td></tr>
                    <tr>
                        <th class="text-right" width="20%">เบอร์โทรผู้ติดต่อ</th>
                        <td> <?= $data->delegate_tel ?></td>
                        <th class="text-right" width="20%">ความสัมพันธ์</th>
                        <td><?= $data->relationship ?></td></tr>
                </table>               
            </div>
        </div>
        <?php include '_detailTab.php'; ?>
    </div>
</div>