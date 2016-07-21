<div class="panel panel-default">
    <!--<div class="panel-heading">
        <?= $title ?>
        
        
        <div class="pull-right">
                                <a href="index.php?r=patient/create" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> เพิ่มข้อมูลผู้ป่วย</a>
                            </div>
    </div>-->
    <div class="panel-body">
        <p>
            <a href="index.php?r=patient/create" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มข้อมูลผู้ป่วย</a>
        </p>

        <form class="" action="" method="get">
            <input type="hidden" name="r" value="patient">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-group">
                        <label> ค้นหา : </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <input class="form-control" type="text" name="p_id" placeholder="รหัสผู้ป่วย">
                </div>
                <div class="col-sm-3">
                    <input class="form-control" type="text" name="fname"  placeholder="ชื่อ-สกุล">

                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="submit" name="search" value="ค้นหา" class="btn btn-success" >
                    </div>
                </div>
            </div>

        </form>

        <table class="table table-striped table-bordered table-hover dataTable no-footer">
            <tr>
                <td>รหัสผู้ป่วย</td>
                <td>ชื่อ-สกุล</td>
                <td>สิทธิการรักษา</td>
                <td>Action</td>
            </tr>

            <?php
            foreach ($data as $val) {
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
                        <a href="index.php?r=patient/update&p_id=<?= $val->p_id ?>" class="btn btn-default"><i class='fa fa-edit'></i> แก้ไข</a>
                        <a href="index.php?r=patient/delete&p_id=<?= $val->p_id ?>" onclick="return confirm('แน่ใจที่จะลบ ?')" class="btn btn-danger"><i class='fa fa-trash-o'></i> ลบ</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?= $page['widget']; ?>
    </div>
</div>
