

<form method="post"  class="form-horizontal" action="index.php?r=stock/payment" >

    <input type="hidden" class="form-control" id="account_no" name = "account_no" value="<?= $data->account_no ?>"/>
    <input type="hidden" class="form-control" id="bookac_no" name = "bookac_no" value="<?= $data_stock->bookac_no ?>"/>

    <div class="form-group">        
        <label class="control-label col-sm-3" for="account_no">รหัสสมาชิกสหกรณ์:</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="account_no"  placeholder="รหัสสมาชิกสหกรณ์"
                   value="<?= $data->account_no ?>" readonly="readonly"/>
        </div>
    </div>

    <div class="form-group"> 
        <label class="control-label col-sm-3" for="account_no">เลขที่บัญชีหุ้น:</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="bookac_no"  placeholder="เลขที่บัญชีหุ้น"
                   value="<?= $data_stock->bookac_no ?>" readonly="readonly"/>
        </div>
    </div>

    <div class="form-group">        
        <label class="control-label col-sm-3" for="fullname">ชื่อ - สกุล:</label>
        <label class="control-label col-sm-3" for="fullname" style="text-align: left;"> <?= $data->name ?> <?= $data->lastname ?></label>        
    </div>
    
     <div class="form-group">        
        <label class="control-label col-sm-3" for="date_register" >วันที่:</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="date_register" name="date_register" placeholder="วันที่สมัคร" value="<?= date("Y-m-d") ?>" />
        </div>
        <label class="control-label col-sm-2" for="period" >ประจำงวด:</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="date_register" name="period" placeholder="ประจำงวด" value="<?= date("m/Y") ?>" />
        </div>
    </div>

    <div class="form-group">        
        <label class="control-label col-sm-3" for="stock">จำนวนหุ้น</label>       
        <div class="col-sm-2" >
            <input  class="form-control" type="text"  id="stock" name="stock" placeholder="จำนวนหุ้น"  value="<?= $data_stock->stock ?>" readonly="readonly"/>
        </div>   
        <label class="control-label col-sm-1 text-left" for="company" style="text-align: left;">หุ้น</label>  
    </div>
    
    <div class="form-group">     
        <label class="control-label col-sm-3" for="sum_stock">คิดเป็นจำนวนเงิน</label>       
        <div class="col-sm-2">
            <input class="form-control" type="text" id="sum_stock" name="sum_stock"  placeholder="มูลค่า" value="<?=($config_unitPrice->value*$data_stock->stock)?>" readonly="readonly"/>
        </div>   
        <label class="control-label col-sm-1" style="text-align: left;">บาท</label>  
    </div>


    <div class="form-group">     
        <div class="col-sm-5 col-sm-offset-3">
            <input class="btn" type="submit" value="บันทึก" name="ok" />
            <input class="btn" type="reset" value="Reset" />
        </div>
    </div>

</form>

