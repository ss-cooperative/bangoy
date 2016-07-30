<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */-->


<div class="panel panel-default">
<!--    <div class="panel-heading">
        <?= $title ?>

    </div>-->
    <div class="panel-body">
        <p>
        <a href="index.php?r=medicine/create" class="btn btn-success"> เพิ่มข้อมูล</a>
        </p>


        <table class="table">
            <tr>
                <td>#</td>
                <td>รหัสยา</td>
                <td>ชื่อยา</td>
                <td>ชนิดยา</td>
                <td>จำนวน</td>
                <td>ราคาต่อหน่วย</td>
                <td>Action</td>
            </tr>

            <?php
            foreach ($data as $val) {
                ?>
                <tr>
                    <td>
                        <?= $val->m_id ?>
                    </td>
                    <td>
                        <a href="index.php?r=medicine/detail&m_id=<?= $val->m_id ?>"><?= $val->m_id ?></a>
                    </td>
                    <td>
                        <a href="index.php?r=medicine/detail&m_id=<?= $val->m_id ?>"><?= $val->m_name ?></a>
                    </td>
                    <td><?= $val->m_type ?></td>
                    <td><?= $val->m_amount ?></td>
                    <td><?= $val->m_price ?></td>
                    
                    <td>
                        <a href="index.php?r=medicine/update&id=<?= $val->m_id ?>"><i class='fa fa-edit'></i> แก้ไข</a>
                        <a href="index.php?r=medicine/delete&id=<?= $val->m_id ?>" onclick="return confirm('แน่ใจที่จะลบ ?')"><i class='fa fa-trash-o'></i> ลบ</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
<?= $page['widget']; ?>
    </div>
</div>
