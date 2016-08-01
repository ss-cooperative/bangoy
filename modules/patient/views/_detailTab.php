<!--/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.patient
 */-->

<div class="row">
            <div class="col-sm-12">
                   <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">ข้อมูลการรักษา</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">ข้อมูลการจ่ายยา</a>
                                </li>
                                
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <?php include '_treat.php';?>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>ข้อมูลการจ่ายยา</h4>
                                    <p>ข้อมูลการจ่ายยา</p>
                                    <?php include '_medicine.php';?>
                                </div>
                               
                            </div>
                        </div>
            </div>
        </div>