<div class="panel panel-default">
    <div class="panel-heading">
        <?= $title ?>

    </div>
    <div class="panel-body">


        <form class="" action="" method="post">

            <div class="row">
                <div class="col-sm-10 col-sm-offset-2">

                    <div class="form-group">
                        <label>รหัสยา : </label>
                        <?= $data->m_id ?>                    
                    </div>

                    <div class="form-group">
                        <label>ชื่อยา-เวชภัณฑ์</label>
                        <input class="form-control" type="text" name="m_name" value="<?= $data->m_name ?>">                        
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label>ปริมาตรต่อหน่วยบรรจุ</label>
                            <input class="form-control" type="text" name="m_volome" value="<?= $data->m_volome ?>">                        
                        </div>

                        <div class="form-group  col-sm-3">
                            <label>ชนิดยา</label>
                            <input class="form-control" type="text" name="m_type" value="<?= $data->m_type ?>">                        
                        </div>

                        <div class="form-group  col-sm-3">
                            <label>หน่วยบรรจุ</label>
                            <input class="form-control" type="text" name="m_unit" value="<?= $data->m_unit ?>">                        
                        </div>
                        <div class="form-group  col-sm-3">
                            <label>จำนวนต่อหน่วย</label>
                            <input class="form-control" type="text" name="m_per_unit" value="<?= $data->m_per_unit ?>">                        
                        </div>

                    </div>



                    <div class="row">

                        <div class="form-group col-sm-3">
                            <label>จำนวน</label>
                            <input class="form-control" type="text" name="m_amount" value="<?= $data->m_amount ?>">                        
                        </div>

                        <div class="form-group col-sm-3">
                            <label>ราคาต่อหน่วย</label>
                            <input class="form-control" type="text" name="m_price" value="<?= $data->m_price ?>">                        
                        </div>

                        <div class="form-group col-sm-6">
                            <label>จุดสั่ง</label>
                            <input class="form-control" type="text" name="m_stock" value="<?= $data->m_stock ?>">                        
                        </div>

                    </div>

                    <div class="form-group">
                        <label>รายละเอียดยา-เวชภัณฑ์</label>
                        <textarea class="form-control" type="text" name="m_detail" /><?= $data->m_detail ?></textarea>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>วันหมดอายุ</label>
                            <input class="form-control" type="text" name="m_exp" value="<?= $data->m_exp ?>">                        
                        </div>
                    </div>


                    <input type="submit" name="ok" value="บันทึก" class="btn btn-success">

                </div>
            </div>
        </form>

    </div>
</div>