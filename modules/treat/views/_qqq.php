<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.patient
 */-->

<div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> ข้อมูลที่ผ่านการซักประวัติมาแล้ว ประจำวันที่ <?= DateThai(date('Y-m-d')) ?>

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
                                    <td>ตรวจรักษา</td>
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
                                           <a href="index.php?r=treat/heal&p_id=<?= $val->p_id ?>" class="btn btn-default"><i class='fa fa-edit'></i> ตรวจรักษา</a>  

                                          
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