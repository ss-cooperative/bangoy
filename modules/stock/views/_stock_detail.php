<?php
// print_r($data_stock);
// echo $data_stock->account_no;
// echo $sql;
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?= "รายละเอียดบัญชีหุ้น: " . $data_stock->bookac_no ?>
    </div>
    <div class="panel-body">
        <p>
        <div class="btn-group" role="group" aria-label="...">
            <a  class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-plus"></i> ชำระค่าหุ้น</a>
            <a href="index.php?r=stock/create" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่ม / ลดจำนวนหุ้น</a>
        </div>

        <div class="btn-group pull-right" role="group" aria-label="...">
            <a href="index.php?r=stock/create" class="btn btn-default"><i class="fa fa-print"></i> พิมพ์</a>
        </div>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>วันที่</th>
                    <th>งวดที่</th>
                    <th>จำนวน(เงิน)</th>
                </tr>
            </thead>
            <tbody>

                <?php
//                print_r($data_stock_transactions);
//                echo $data_stock_transactions->sql;
                foreach ($data_stock_transactions as $key => $val):
                    ?>

                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $val->date_tran ?></td>
                        <td><?= $val->period ?></td>
                        <td><?= $val->amount ?></td>
                    </tr>
                    <?php
                endforeach;
                ?>



            </tbody>
        </table>               
    </div>

</div>




<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="modalSearch" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">ชำระค่าหุ้น</h4>
            </div>
            <div class="modal-body">
                <?php include("payment.php")?>
            </div>
        </div>
    </div>
</div>



