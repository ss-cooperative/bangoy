<div class="panel panel-default">
    <div class="panel-heading">
    <?= $title ?>    
    </div>
    <div class="panel-body">
        <p>
            <a href="index.php?r=member/create" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มสมาชิก</a>
        </p>

        <form class="form-inline" action="" method="get">
            <input type="hidden" name="r" value="member">              
            <div class="form-group">
                <label for="email" >ค้นหา: </label>
                <input type="text" class="form-control" id="account_no" name="account_no" placeholder="รหัสสมาชิก" value="<?=$_GET['account_no']?>"/> 
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="ชื่อ-สกุล"  value="<?=$_GET['fullname']?>"/>
                <input type="submit" name="search" value="search" class="btn btn-success" >
            </div>    
        </form>
        <br/>
        <table class="table table-striped table-bordered table-hover dataTable no-footer">
            <tr>
                <td>รหัสสมาชิก</td>
                <td>ชื่อ-สกุล</td>
                <td>รายละเอียด</td>
                <td>Action</td>
            </tr>

            <?php
            //while ($val = $res->fetch_assoc()) {
            //print_r($data);
            foreach ($data as $val) {
                ?>
                <tr>
                    <td>
                        <?= $val->account_no ?>
                    </td>
                    <td >
                        <img src="<?= genSrcImg($val->account_no) ?>" width="40" height="45" class="img-responsive img-thumbnail"/>&nbsp;<a href="index.php?r=member/view&account_no=<?= $val->account_no ?>">
                            <?= $val->name . " " . $val->lastname; ?></a>
                    </td>
                    <td>

                        <p>Company : <?= $val->company ?></p>
                    </td>
                    <td>
                        <a href="index.php?r=member/update&account_no=<?= $val->account_no ?>" class="btn btn-default"><i class='fa fa-edit'></i> แก้ไข</a>
                        <a href="index.php?r=member/delete&account_no=<?= $val->account_no ?>" onclick="return confirm('แน่ใจที่จะลบ ?')" class="btn btn-danger"><i class='fa fa-trash-o'></i> ลบ</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?= $page['widget']; ?>
    </div>
</div>
