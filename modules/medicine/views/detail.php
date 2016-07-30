<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */-->

<div class="panel panel-default">
    <div class="panel-heading">
        <?= $title ?>

        <div class="pull-right">
            <a onclick="window.print();
                    return false;" class="btn btn-default btn-xs"><i class="fa fa-print"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <table class="table">
                    <tr><th class="text-right" width="30%">รหัสยา-เวชภัณฑ์</th><td colspan="3"> <?= $data->m_id ?></td></tr>
                    <tr><th class="text-right" width="30%">ยาเวชภัณฑ์</th><td colspan="3"> <?= $data->m_name ?></td></tr>
                    <tr><th class="text-right" width="30%">ปริมาตรต่อหน่วยบรรจุ</th><td colspan="3"> <?= $data->m_volome ?></td></tr>
                    <tr><th class="text-right" width="30%">ชนิดยา</th><td colspan="3"> <?= $data->m_type ?></td></tr>
                    <tr><th class="text-right" width="30%">หน่วยบรรจุ</th><td colspan="3"> <?= $data->m_unit ?></td></tr>
                    <tr><th class="text-right" width="30%">จำนวนต่อหน่วย</th><td colspan="3"> <?= $data->m_per_unit ?></td></tr>
                    <tr><th class="text-right" width="30%">จำนวน</th><td colspan="3"> <?= $data->m_amount ?></td></tr>
                    <tr><th class="text-right" width="30%">ราคาต่อหน่วย</th><td colspan="3"> <?= $data->m_price ?></td></tr>
                    <tr><th class="text-right" width="30%">จุดสั่ง</th><td colspan="3"> <?= $data->m_stock ?></td></tr>
                    <tr><th class="text-right" width="30%">รายละเอียดยา-เวชภัณฑ์</th><td colspan="3"> <?= $data->m_detail ?></td></tr>
                    <tr><th class="text-right" width="30%">วันหยุดอายุ</th><td colspan="3"> <?= $data->m_exp ?>
                </table>                 
            </div>
            <div class="col-sm-12">
                <?php include("_tab.php"); ?>

            </div>
        </div>
    </div>
</div>

