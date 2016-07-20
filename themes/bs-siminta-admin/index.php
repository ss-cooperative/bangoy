<?php

if($_SESSION['login']===false):
    include_once("layouts/login.php");
else:
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title?></title>
        <!-- Core CSS - Include with every page -->
        <link href="<?= $asset_path ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" media="all"/>
        <link href="<?= $asset_path ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?= $asset_path ?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
        <link href="<?= $asset_path ?>assets/css/style.css" rel="stylesheet" />
        <link href="<?= $asset_path ?>assets/css/main-style.css" rel="stylesheet" />
        <!-- Page-Level CSS -->
        <link href="<?= $asset_path ?>assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <script src="<?= $asset_path ?>assets/plugins/jquery-1.10.2.js"></script>
    </head>
    <body>
        <!--  wrapper -->
        <div id="wrapper">
            <!-- navbar top -->
            <nav class="navbar navbar-default navbar-fixed-top hidden-print" role="navigation" id="navbar">
                <!-- navbar-header -->
                <div class="navbar-header hidden-sm hidden-md hidden-lg">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="<?= $asset_path ?>assets/img/logo.png" alt=""  height="70"/>
                    </a>
                </div>
                <!-- end navbar-header -->
                
                <div class="navbar-form navbar-left hidden-xs" >
                    <a  href="index.php">
                    <img src="<?= $asset_path ?>assets/img/logo_label.png" alt="" height="55" />
                    </a>
      </div>
                
                <!-- navbar-top-links -->
                <ul class="nav navbar-top-links navbar-right">
                    <!-- main dropdown -->
                    

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-2x"></i>
                        </a>
                        <!-- dropdown alerts-->
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i>New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i>Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i>New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- end dropdown-alerts -->
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-2x"></i>
                        </a>
                        <!-- dropdown user-->
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="?logout=1"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                            </li>
                        </ul>
                        <!-- end dropdown-user -->
                    </li>
                    <!-- end main dropdown -->
                </ul>
                <!-- end navbar-top-links -->

            </nav>
            <!-- end navbar top -->

            <!-- navbar side -->
            <nav class="navbar-default navbar-static-side hidden-print" role="navigation">
                
                <!-- sidebar-collapse -->
                <div class="sidebar-collapse">
                    <?php include('layouts/menu_left.php');?>
                </div>
                <!-- end sidebar-collapse -->
            </nav>
            <!-- end navbar side -->
            <!--  page-wrapper -->
            <div id="page-wrapper">

                <div class="row hidden-print">
                    <!-- Page Header -->
                    <div class="col-lg-12">
                        <h1 class="page-header"><?=$title?></h1>
                    </div>
                    <!--End Page Header -->
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <?= $content ?>
                    </div>
                </div>

            </div>
            <!-- end page-wrapper -->

        </div>
        <!-- end wrapper -->

        <!-- Core Scripts - Include with every page -->
        
        <script src="<?= $asset_path ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="<?= $asset_path ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?= $asset_path ?>assets/plugins/pace/pace.js"></script>
<!--        <script src="<?= $asset_path ?>assets/scripts/siminta.js"></script>-->
        <!-- Page-Level Plugin Scripts-->
        <script src="<?= $asset_path ?>assets/plugins/morris/raphael-2.1.0.min.js"></script>
        <script src="<?= $asset_path ?>assets/plugins/morris/morris.js"></script>
        <script src="<?= $asset_path ?>assets/scripts/dashboard-demo.js"></script>

    </body>

</html>
<?php endif;?>