<form method="post"  class="form-horizontal" action="index.php?r=stock/new&account_no=<?=$data->account_no?>">
    
    <input type="hidden" class="form-control" id="account_no" name = "account_no" value="<?=$data->account_no?>"/>
    
    <div class="form-group">        
        <label class="control-label col-sm-3" for="account_no">เลขทะเบียนสหกรณ์:</label>
        <div class="col-sm-7">
            
            <input type="text" class="form-control" id="account_no"  placeholder="เลขทะเบียนสหกรณ์"
            value="<?=$data->account_no?>" readonly="readonly"/>
        </div>
    </div>
    
    <div class="form-group">        
        <label class="control-label col-sm-3" for="bookac_no">เลขที่บัญชีหุ้น:</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="bookac_no" name = "bookac_no" placeholder="เลขที่บัญชีหุ้น"  value="<?=$data->bookac_no?>" />
        </div>
    </div>
       
    
    <div class="form-group">        
        <label class="control-label col-sm-3" for="date_register" >วันที่สมัคร:</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" id="date_register" name="date_register" placeholder="วันที่สมัคร" value="<?=$data->date_register?>" />
        </div>
        <label class="control-label col-sm-2" for="date_register" >ประจำงวด:</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="date_register" name="date_register" placeholder="วันที่สมัคร" value="<?=$data->date_register?>" />
        </div>
    </div>
       
    
    
    <div class="form-group">        
        <label class="control-label col-sm-3" for="phone_number">ค่าธรรมเนียมแรกเข้า</label>       
        <div class="col-sm-4">
             <input  class="form-control" type="text" name="phone_number"  placeholder="ค่าธรรมเนียมแรกเข้า" value="<?=$data->phone_number?>"/>
        </div>
        
        
    </div>
    
    
    <div class="form-group">        
        <label class="control-label col-sm-3" for="company">จำนวนหุ้น</label>       
        <div class="col-sm-2" >
             <input  class="form-control" type="text" name="company"  placeholder="จำนวนหุ้น"   value="<?=$data->company?>" />
        </div>   
        <label class="control-label col-sm-1 text-left" for="company" style="padding-left:0px;">หุ้น</label>  
         
        <label class="control-label col-sm-1" for="position">มูลค่า</label>       
        <div class="col-sm-3">
             <input  class="form-control" type="text" name="position"  placeholder="ตำแหน่ง"   value="<?=$data->position?>"></input>
        </div>   
        <label class="control-label col-sm-1" for="position">บาท</label>  
    </div>
    
   
   <div class="form-group">
       <label class="control-label col-sm-3" for="job_level">&nbsp;</label>       
        <div class="col-sm-5">
        <input class="btn" type="submit" value="บันทึก" name="ok" />
        <input class="btn" type="reset" value="Reset" />
    </div>
</form>