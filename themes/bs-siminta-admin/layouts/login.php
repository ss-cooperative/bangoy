<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
        <!-- Core CSS - Include with every page -->
        <link href="<?= $asset_path ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="<?= $asset_path ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?= $asset_path ?>assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
        <link href="<?= $asset_path ?>assets/css/style.css" rel="stylesheet" />
        <link href="<?= $asset_path ?>assets/css/main-style.css" rel="stylesheet" />

    </head>

    <body class="body-Login-back">

        <div class="container">

            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                    <img src="<?= $asset_path ?>assets/img/logo.png" alt="" width="100%"/>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">กรุณาเข้าสู่ระบบ</h3>
                        </div>
                        <div class="panel-body">

                            <form role="form" action="" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="ชื่อผู้ใช้" name="username"  autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="รหัสผ่าน" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <?php if(isset($_SESSION['login_err'])):?>
                            <div class="alert alert-warning">
                                <strong>Warning!</strong> <?=$_SESSION['login_err']?>
                            </div>
                            <?php endif;?>

                                    <input type="submit" name="login" class="btn btn-lg btn-info btn-block"  value="เข้าสู่ระบบ" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Scripts - Include with every page -->
        <script src="<?= $asset_path ?>assets/plugins/jquery-1.10.2.js"></script>
        <script src="<?= $asset_path ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="<?= $asset_path ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>

    </body>

</html>
