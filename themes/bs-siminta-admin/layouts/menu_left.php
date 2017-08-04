<?php
    $user = $db->select('user')->where(["id={$_SESSION['user_id']}"])->one();

    $arrMenu = [];
    $arrMenu[]=['title'=>'<i class="fa fa-home"></i> หน้าหลัก','rout'=>''];
    $arrMenu[]=['title'=>'<i class="fa fa-user"></i> ข้อมูลสมาชิก',
        'rout'=>'member',
        //'arg'=>['test'=>'1']
        ];
    $arrMenu[]=[
            'title' => '<i class="fa fa-user"></i> รายการหุ้น','rout'=>'stock',
//            'items' => [
//                ['title'=>'<i class="fa fa-user"></i> เงินกู้','rout'=>'patient']
//            ]
        ];
    //$arrMenu[]=['title'=>'<i class="fa fa-tasks"></i> การรักษาพยาบาล','rout'=>'index.php?r=treat'];
    //$arrMenu[]=['title'=>'<i class="fa fa-flask"></i> ยา-เวชภัณฑ์','rout'=>'medicine'];
    //$arrMenu[]=['title'=>'<i class="fa fa-files-o"></i> รายงาน','rout'=>'report'];
?>
<!-- side-menu -->
<ul class="nav" id="side-menu">
    <li>
        <!-- user image section-->
        <div class="user-section">
            <div class="user-section-inner">
                <img src="<?= $asset_path ?>assets/img/user.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="user-info">
                <div><?=$user->displayname?></div>
                <div class="user-text-online">
                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                </div>
            </div>
        </div>
        <!--end user image section-->
    </li>
    <?php
    foreach ($arrMenu as $menu):
        $router = isset($_GET['r'])?$_GET['r']:'';
        $arg = isset($menu['arg'])?$menu['arg']:[];
        ?>
        <li class="<?=$router==$menu['rout']?'selected':'';?>">
            <a href="<?=rout($menu['rout'],$arg)?>">
                <?=$menu['title']?>
                <?=($menu['items'])?'<span class="fa arrow"></span>':''?>
            </a>
            
            <?php if($menu['items']){?>
            <ul class="nav nav-second-level collapse in">
            <?php
                foreach ($menu['items'] as $s_menu):
                    $arg = isset($s_menu['arg'])?$s_menu['arg']:[];
                    ?>    
                <li>
                    <a href="<?=rout($s_menu['rout'],$arg)?>">
                    <?=$s_menu['title']?>
                </a>
                </li>
                <?php endforeach;?>
            </ul>           
            <?php } ?>             
        </li>
    <?php    
    endforeach;
    ?>
</ul>
<!--
<ul class="nav" id="side-menu">
    <?php
    foreach ($arrMenu as $menu):
        $router = isset($_GET['r'])?$_GET['r']:'';
        $arg = isset($menu['arg'])?$menu['arg']:[];
        ?>
        <li class="<?=$router==$menu['rout']?'selected':'';?>">
            <a href="<?=rout($menu['rout'],$arg)?>"><?=$menu['title']?></a>
        </li>
    <?php    
    endforeach;
    ?>
</ul>-->
<!-- end side-menu -->
