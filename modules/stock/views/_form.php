<form method="post"  class="form-horizontal" >
    
    
    <div class="form-group">        
        <label class="control-label col-sm-2" for="account_no">เลขทะเบียนสหกรณ์:</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="account_no" name = "account_no" placeholder="เลขทะเบียนสหกรณ์" value="<?=$data->account_no?>" />
        </div>
    </div>
    
    <div class="form-group">        
        <label class="control-label col-sm-2" for="Employee_no">เลขที่บัญชีหุ้น:</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="Employee_no" name = "Employee_no" placeholder="เลขประจำตัวพนักงาน"  value="<?=$data->Employee_no?>" />
        </div>
    </div>
       
    <div class="form-group">        
        <label class="control-label col-sm-2" for="title">ชื่อ - สกุล:</label>
        <div class="col-sm-2">
             <select class="form-control" name="title">
                 <option value="">เลือก</option>
                 <?php foreach($prefix as $k => $v):?>
                <option value="<?=$k?>" <?=($data->title == $k)?"selected":""?>><?=$v?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="col-sm-3">
             <input  class="form-control" type="text" name="name"  placeholder="ชื่อ" value="<?=$data->name?>"/>
        </div>
        <div class="col-sm-3">
             <input  class="form-control" type="text" name="lastname" placeholder="สกุล" value="<?=$data->lastname?>"/>
        </div>
    </div>
   

    <div class="form-group">        
        <label class="control-label col-sm-2" for="id_card">เลขที่บัตรประชาชน:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="id_card" name = "id_card" placeholder="เลขที่บัตรประชาชน" value="<?=$data->id_card?>" />
        </div>
    </div>
    
    <div class="form-group">        
        <label class="control-label col-sm-2" for="birthday" >วัน / เดือน / ปีเกิด:</label>
        <div class="col-sm-4">
            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="วัน / เดือน / ปีเกิด" value="<?=$data->birthday?>" />
        </div>
    </div>
       
    
    
    <div class="form-group">        
        <label class="control-label col-sm-2" for="phone_number">โทรศัพท์</label>       
        <div class="col-sm-2">
             <input  class="form-control" type="text" name="phone_number"  placeholder="โทรศัพท์" value="<?=$data->phone_number?>"/>
        </div>
        
        <label class="control-label col-sm-2" for="phone_officer">โทรศัพท์ที่ทำงาน</label>  
        <?php 
        $phone_officer = '';$to = '';
        if($data->phone_officer)list($phone_officer,$to) = explode('-',$data->phone_officer);
        ?>
        <div class="col-sm-2">
             <input  class="form-control" type="text" name="phone_officer" placeholder="โทรศัพท์ที่ทำงาน"  value="<?=$phone_officer?>"/>
        </div>   
             
        <div class="col-sm-1">
             <input  class="form-control" type="text" name="phone_officer_to" placeholder="ต่อ"   value="<?=$to?>"/>
        </div>
    </div>
    
    
    <div class="form-group">        
        <label class="control-label col-sm-2" for="company">บริษัท</label>       
        <div class="col-sm-5">
             <input  class="form-control" type="text" name="company"  placeholder="บริษัท"   value="<?=$data->company?>"></input>
        </div>   
    </div>
    
    <div class="form-group">        
        <label class="control-label col-sm-2" for="position">ตำแหน่ง</label>       
        <div class="col-sm-5">
             <input  class="form-control" type="text" name="position"  placeholder="ตำแหน่ง"   value="<?=$data->position?>"></input>
        </div>   
    </div>
    
    <div class="form-group">        
        <label class="control-label col-sm-2" for="job_level">Job Level</label>       
        <div class="col-sm-5">
             <input  class="form-control" type="text" name="job_level"  placeholder="ตำแหน่ง"  value="<?=$data->job_level?>" />
        </div>   
    </div>
    
   
   <div class="form-group">
       <label class="control-label col-sm-2" for="job_level">&nbsp;</label>       
        <div class="col-sm-5">
        <input class="btn" type="submit" value="บันทึก" name="ok" />
        <input class="btn" type="reset" value="Reset" />
    </div>
</form>