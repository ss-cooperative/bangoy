<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.privilege
 */-->

<a href="index.php?r=privilege/create" class="btn btn-success"> เพิ่มข้อมูล</a>


<table class="table">
    <tr>
        <td>
            Id
        </td>
        <td>
            Name
        </td>
        <td>
            Action
        </td>
    </tr>

    <?php
    foreach ($data as $val) {
        ?>
        <tr>
            <td>
                <?= $val->pv_id ?>
            </td>
            <td>
                <a href="index.php?r=privilege/detail&id=<?= $val->pv_id ?>"><?= $val->pv_name ?></a>
            </td>
            <td>
                <a href="index.php?r=privilege/update&id=<?= $val->pv_id ?>">Upadate</a>
                <a href="index.php?r=privilege/delete&id=<?= $val->pv_id ?>" onclick="return confirm('แน่ใจที่จะลบ ?')">ลบ</a>
            </td>
        </tr>
    <?php } ?>
</table>
