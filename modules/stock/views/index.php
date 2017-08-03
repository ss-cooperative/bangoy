<!--<p>
    <a href="index.php?r=stock/create" class="btn btn-success"><i class="fa fa-plus"></i> เปิดบัญชีใหม่</a> 
</p>-->

<div class="panel panel-default">
    <div class="panel-heading">
        <?= $title ?>    
    </div>
    <div class="panel-body">
        
        
        <form class="form-horizontal" action="" method="post">
            <input type="hidden" name="r" value="stock">    

            <div class="form-group">
                <label class="control-label col-sm-2" >ค้นหา: รหัสสมาชิก</label>
                <div class="col-sm-2">
                    <select type="text" class="form-control" id="account_no" name="account_no"> 
                        <option value="">รหัสสมาชิก</option>
                    </select>
                </div>
                 <label class="control-label col-sm-1" >ชื่อ-สกุล:</label>
                <div class="col-sm-2">                   
                    <select type="text" class="form-control" id="fullname" name="fullname" > 
                        <option value="">ชื่อ-สกุล</option>
                    </select>
                </div>
                <input type="submit" name="search" value="ค้นหา" class="btn btn-success btn-sm" >
            </div>

               
        </form>
        <br/>
        
        <?php 
        if($data)
        include("_member.php");
        ?>
        
        
        
        

    </div>
</div>


<link href="js/select2/css/select2.min.css" rel="stylesheet" />
<script type="text/javascript" src="js/select2/js/select2.min.js"></script>
<script type="text/javascript" >
    $(function () {

        $('select#account_no').select2({
            placeholder: "รหัสสมาชิก",
            ajax: {
                url: "index.php?r=member/api&search_account_no=1&ajax=1",
                dataType: 'json',
                delay: 250,
                processResults: function (data, params) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            },
            minimumInputLength: 1
        });
        
        $('select#fullname').select2({
            placeholder: "ชื่อ-สกุล",
            ajax: {
                url: "index.php?r=member/api&search_fullname=1&ajax=1",
                dataType: 'json',
                delay: 250,
                processResults: function (data, params) {
                    return {
                        results: data.items
                    };
                },
                cache: true
            },
            minimumInputLength: 1
        });

        //alert(555);
    });
</script>