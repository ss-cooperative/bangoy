 <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> ข้อมูลการจองคิว ประจำวันที่ <?= DateThai(date('Y-m-d')) ?>

            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">

                            <table class="table table-bordered table-hover table-striped ">

                                <tr>
                                    <td>คิวที่</td>
                                    <td>ชื่อ-สกุล</td>
                                    <td>จองเมื่อ</td>
                                    <td>ตรวจสอบ</td>
                                </tr>

                                <?php
                                foreach ($res_qqq as $val) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $val->qno ?>
                                        </td>
                                        <td>
                                            <?= $val->qname . " " . $val->qsurname ?>
                                            <?= $val->p_name . " " . $val->p_surname ?>
                                        </td>
                                        <td>
                                            <?= DateTimeThai($val->qdate) ?>
                                        </td>
                                        <td>
                                            <?php if ($val->p_id): ?>
                                            <a href="index.php?r=treat/assign&p_id=<?= $val->p_id ?>" class="btn btn-default"><i class='fa fa-edit'></i> กรอกอาการเบื้องต้น</a>  

                                            <?php else: ?>
                                            <a href="index.php?r=patient/create&qid=<?=$val->qid?>">+ ผู้ป่วยใหม่</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </table>

                        </div>

                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
        </div>