<?php

if($data_stock){
    // print_r($data_stock);
    // echo $data_stock->account_no;
    // echo $sql;
?>

<div class="row">
           

            <div class="col-sm-12">

                <table class="table">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th></th>
                        </tr>
                    </thead>
        </table>               
    </div>
</div>


<?php

}else{
  ?>
  <div class="alert alert-warning alert-dismissable">
    ไม่พบหุ้นที่ได้เปิดไว้ สามารถกดเปิดบัญชีหุ้นได้
    <a class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm">เปิดบัญชีหุ้น</a>
  </div>
  
  

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" id="modalSearch" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">เปิดบัญชีหุ้น</h4>
            </div>
            <div class="modal-body">
               <?php include("_form_new.php")?>
        </div>
    </div>
</div>
  
  
  
  
  <?php
}
?>