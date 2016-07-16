 <div class="panel panel-info">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> ข้อมูลหมอนัด

            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">

                            <table class="table table-bordered table-hover table-striped ">

                                <tr>
                                    <th>รหัสผู้ป่วย </th>
                                    <th>ชื่อ-สกุล</th>
                                    <th>นัดเมื่อ</th>
                                    <th>สาเหตุ</th>
                                </tr>

                                <?php
                                foreach ($res_appointment as $val) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $val->p_id ?>
                                        </td>
                                        <td>
                                            <?= $val->p_name . " " . $val->p_surname ?>
                                        </td>
                                        <td>
                                            <?= DateTimeThai($val->app_date . " " . $val->app_time) ?>
                                        </td>
                                        <td>
                                            <?= $val->app_reason ?>
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