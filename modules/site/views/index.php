<?php
$data = $db->select('patient')->all();

//include(dirname(__FILE__).'/menu_top.php');
?>


<div class="row">
    <!--quick info section -->
    <div class="col-lg-2">
        <a class="btn btn-success btn-block" data-toggle="modal" data-target=".bs-example-modal-sm">
            <i class="fa fa-outdent fa-2x"></i>
            <h4>จองคิว</h4>                     
        </a>

    </div>
    <div class="col-lg-2">
        <a href="index.php?r=patient/check" class="btn btn-warning btn-block" >
            <i class="fa fa-user-md fa-2x"></i>
            <h4>ตรวจสอบประวัติ</h4>                     
        </a>
    </div>


    <div class="col-lg-2">
        <a href="index.php?r=treat/heal" class="btn btn-danger btn-block" >
            <i class="fa fa-heart fa-2x"></i>
            <h4>ตรวจรักษา/นัดหมาย</h4>                     
        </a>
    </div>

    <div class="col-lg-2">
        <a href="index.php?r=paymedicine/index" class="btn btn-success btn-block" >
            <i class="fa fa-medkit fa-2x"></i>
            <h4>จ่ายยา</h4>                     
        </a>
    </div>
    <!--end quick info section -->
</div>

<hr/>
<div class="row">
    <div class="col-sm-6">
       <?php include '_appoint.php';?>
    </div>

    <div class="col-sm-6">
       <?php include '_qqq.php';?>
    </div>

</div>


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">จองคิว</h4>
            </div>
            <div class="modal-body">
                <form class="" action="" method="get">
                    <?= genGetHidden() ?>
                    <div class="row">
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label>ค้นหา</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <input class="form-control" type="text" name="p_id" placeholder="รหัสผู้ป่วย">
                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="p_name"  placeholder="ชื่อ">

                        </div>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" name="p_surname"  placeholder="สกุล">

                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <input type="button" name="search" value="ค้นหา" class="btn btn-success search" >
                            </div>
                        </div>
                    </div>

                </form>
                <div class="row">
                    <div class="col-sm-12 s-data">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(function () {


        $('.search').click(function () {
            var p_id = $('input[name=p_id]').val();
            var p_name = $('input[name=p_name]').val();
            var p_surname = $('input[name=p_surname]').val();
            $.get('index.php?r=patient/reserve&ajax=1',
                    {
                        p_id: p_id,
                        p_name: p_name,
                        p_surname: p_surname,
                        search: 1
                    },
            function (data) {
                $('.modal-body .s-data').html(data);
            });
        });
    });


    function reserve(id, name, surname) {
        //alert(id);
        $.get('index.php?r=qqq/reserve&ajax=1',
                {
                    p_id: id,
                    qname: name,
                    qsurname: surname
                }
        );
    }
</script>