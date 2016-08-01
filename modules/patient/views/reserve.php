<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.patient
 */-->

<table class="table table-striped table-bordered table-hover dataTable no-footer">
    <tr>
        <td>รหัสผู้ป่วย</td>
        <td>ชื่อ-สกุล</td>
        <td>สิทธิการรักษา</td>
        <td>Action</td>
    </tr>

    <?php
    if ($data) {
        foreach ($data as $val) {
            ?>
            <tr>
                <td>
                    <?= $val->p_id ?>
                </td>
                <td>
                    <a href="javascript:reserve('<?= $val->p_id ?>');"><?= $val->p_name . " " . $val->p_surname; ?></a>
                </td>
                <td>
                    <?= findPrivilege($val->pv_id) ?>
                </td>
                <td>
                    <a href="javascript:reserve('<?= $val->p_id ?>');" class="btn btn-default" ><i class='fa fa-edit'></i> จองคิว</a>
                </td>
            </tr>
        <?php
        }
    } else {
        ?>

        <tr>
            <td>
                <font color='red'>ไม่พบอข้อมูล</font>
            </td>
            <td>
    <?= $_GET['p_name'] . " " . $_GET['p_surname'] ?>
            </td>
            <td>
                <font color='red'>ไม่พบอข้อมูล</font>
            </td>
            <td>
                <a href="javascript:reserve('','<?= $_GET['p_name'] ?>','<?= $_GET['p_surname'] ?>');" class="btn btn-default"><i class='fa fa-edit'></i> จองคิว</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
