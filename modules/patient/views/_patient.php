<div class="panel panel-default">
    <div class="panel-heading">
        <?= $title ?>
        
        
<!--        <div class="pull-right">
                                <a href="index.php?r=patient/create" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> เพิ่มข้อมูลผู้ป่วย</a>
                            </div>-->
    </div>
    <div class="panel-body"> 
<table class="table table-striped table-bordered table-hover dataTable no-footer">
            <tr>
                <td>รหัสผู้ป่วย</td>
                <td>ชื่อ-สกุล</td>
                <td>สิทธิการรักษา</td>
                <td>Action</td>
            </tr>

            <?php
            foreach ($data_patient as $val) {
                ?>
                <tr>
                    <td>
                        <?= $val->p_id ?>
                    </td>
                    <td>
                        <a href="index.php?r=patient/detail&id=<?= $val->p_id ?>"><?= $val->p_name . " " . $val->p_surname; ?></a>
                    </td>
                    <td>
                        <?= findPrivilege($val->pv_id) ?>
                    </td>
                    <td>
                        <a href="index.php?r=treat/assign&p_id=<?= $val->p_id ?>" class="btn btn-default"><i class='fa fa-edit'></i> กรอกอาการเบื้องต้น</a>                        
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?= $page['widget']; ?>

 </div>
</div>
