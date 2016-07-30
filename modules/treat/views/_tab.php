<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */-->
 
<div class="row">
    <div class="col-sm-12">
        <div class="panel-body">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">ผลการวินิจฉัย</a>
                </li>
                <li class=""><a href="#profile" data-toggle="tab">จ่ายยา-เวชภัณฑ์</a>
                </li>
                <li class=""><a href="#appointments" data-toggle="tab">นัดหมาย</a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea class="form-control" name="resultjude" rows="6" placeholder="ผลการวินิจฉัย"><?= $res_patient->resultjude ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile">
                     <?php include '_medicine.php'; ?>
                </div>
                <div class="tab-pane fade" id="appointments">
                     <?php include '_appointments.php'; ?>
                </div>

            </div>
        </div>
    </div>
</div>
