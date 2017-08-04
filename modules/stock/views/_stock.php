<?php
if ($data_stock) {
    // print_r($data_stock);
    // echo $data_stock->account_no;
    // echo $sql;
    ?>
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?= "ข้อมูลบัญชีหุ้น" ?>
                    <!--                     <div class="pull-right">
                                <a href="index.php?r=patient/update&p_id=<?= $data->p_id ?>" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> แก้ไข</a>
                            </div>-->
                </div>
                <div class="panel-body">
    <!--                    <p>
                        <a href="index.php?r=stock/create" class="btn btn-default"><i class="fa fa-print"></i> พิมพ์</a>
                  
                    </p>-->
                    <table class="table" >                        
                        <tr>
                            <td width="50%" class="text-left">เลขที่บัญชีหุ้น</td>
                            <td width="50%" class="text-right" colspan="2"><?= $data_stock->bookac_no ?></td>
                        </tr>
                        <tr>
                            <td width="50%" class="text-left">วันที่สมัคร</td>
                            <td width="50%" class="text-right" colspan="2"><?= $data_stock->date_register ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">จำนวนหุ้น</td>
                            <td class="text-right"><?= $data_stock->stock ?></td>
                            <td class="text-left">หุ้น</td>
                        </tr>

                        <tr>
                            <td class="text-left">จำนวนเงิน</td>
                            <td class="text-right"><?= $data_stock->sum_stock ?></td>
                            <td class="text-left">เงิน</td>
                        </tr>
                    </table>               
                </div>
            </div>
        </div>
        <div class="col-sm-9">            
            <?php include("_stock_detail.php"); ?>
        </div>
    </div>




    <?php
} else {
    ?>
    <div class="alert alert-warning alert-dismissable">
        ไม่พบหุ้นที่ได้เปิดไว้ สามารถกดเปิดบัญชีหุ้นได้
        <a class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm">เปิดบัญชีหุ้น</a>
    </div>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="modalSearch" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">เปิดบัญชีหุ้น</h4>
                </div>
                <div class="modal-body">
                    <?php include("_form_new.php") ?>
                </div>
            </div>
        </div>
    </div>




    <?php
}
?>