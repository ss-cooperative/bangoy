<div class="panel panel-default">
    <div class="panel-heading">
        <?= $title ?>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <img src="#" width="100%" height="200"/>
            </div>

            <div class="col-sm-9">

                <table class="table">
                    <tr><th class="text-right" width="20%">รหัสผู้ปวย</th><td colspan="3"> <?= $res_patient->p_id ?></td></tr>
                    <tr><th class="text-right" width="20%">สิทธิการรักษา</th><td colspan="3"> <?= findPrivilege($res_patient->pv_id) ?></td></tr>
                    <tr><th class="text-right" width="20%">ชื่อ - สกุล</th><td colspan="3"> <?= $res_patient->p_name ?> <?= $res_patient->p_surname ?></td></tr>
                    <tr>
                        <th class="text-right" width="20%">เลขบัตรประชาชน</th>
                        <td> <?= $res_patient->p_nid ?></td>
                        <th class="text-right" width="20%">วัน/เดือน/ปีเกิด</th>
                        <td > <?= $res_patient->p_birthday ?></td>
                    </tr>

                    <tr>
                        <th class="text-right" width="20%">อายุ</th>
                        <td > <?= $res_patient->p_age ?></td>
                        <th class="text-right" width="20%">เพศ</th>
                        <td > <?= $res_patient->p_sex ?></td>
                    </tr>
                    <tr>
                        <th class="text-right" width="20%">โรคประจำตัว</th>
                        <td colspan="3"> <?= $data->disease ?> </td>
                    </tr>
                    <tr>
                        <th class="text-right" width="20%">แพ้ยา</th><td colspan="3"> <?= $data->allergic ?></td>
                    </tr>           
                </table>               
            </div>
        </div>
        <?php include '_formAssign.php'; ?>
    </div>
</div>