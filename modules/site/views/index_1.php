<?php
$data = $db->select('patient')->all();

include(dirname(__FILE__).'/menu_top.php');
 ?>

 <div class="row">
                 <!--quick info section -->
                 <div class="col-lg-3">
                     <div class="alert alert-danger text-center">
                         <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>20 </b>Meetings Sheduled This Month

                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="alert alert-success text-center">
                         <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 % </b>Profit Recorded in This Month
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="alert alert-info text-center">
                         <i class="fa fa-rss fa-3x"></i>&nbsp;<b>1,900</b> New Subscribers This Year

                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="alert alert-warning text-center">
                         <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>2,000 $ </b>Payment Dues For Rejected Items
                     </div>
                 </div>
                 <!--end quick info section -->
             </div>

             
<div class="row">
  <div class="col-sm-6">
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>ข้อมูลผู้ป่วย
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">

                                      <table class="table table-bordered table-hover table-striped ">
                                        <tr>
                                          <td>
                                            Id
                                          </td>
                                          <td>
                                            Name
                                          </td>
                                        </tr>

                                        <?php
                                        foreach($data as $val){
                                      ?>
                                      <tr>
                                        <td>
                                          <?=$val->p_id?>
                                        </td>
                                        <td>
                                          <a href="index.php?r=patient/detail&id=<?=$val->p_id?>"><?=$val->p_name . " ".$val->p_surname;?></a>
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
</div>
<div class="col-sm-6">
  55555555555
</div>
</div>
