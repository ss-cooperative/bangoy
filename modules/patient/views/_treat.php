<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.patient
 */-->


<h4>ข้อมูลการรักษา</h4>
<p>
<a href="index.php?r=treat/add&p_id=<?= $data->p_id ?>" class="btn btn-default"><i class="fa fa-edit"></i> แจ้งอาการเบื้ยงต้น</a>
</p>

<table class="table table-striped table-bordered table-hover dataTable no-footer">
            <tr>
                <td>วันที่รักษา</td>
                <td>อาการป่วย</td>
                <td>ความดัน</td>
                <td>อุณหภูมิ</td>
                <td>ชีพจร</td>
                <td width="50"></td>
            </tr>

            <?php
            foreach ($data_treat as $val) {
                ?>
                <tr>
                    <td>
                        <a href="index.php?r=treat/detail&t_no=<?= $val->t_no ?>"><?= DateTimeThai($val->t_date) ?></a>
                        
                    </td>
                    <td>
                        <?= $val->symptom ?>
                    </td>
                    <td>
                        <?= $val->pressure ?>
                    </td>
                    <td>
                        <?= $val->temp ?>
                    </td>
                    <td>
                        <?= $val->pulse ?>
                    </td>
                    <td>
                        <a href="index.php?r=treat/detail&t_no=<?= $val->t_no ?>" class="btn btn-default"><i class='fa fa-edit'></i> รายละเอียด</a>
                       
                    </td>
                </tr>
            <?php } ?>
        </table>