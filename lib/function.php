<?php


function convDateToDb($strDate){
    $year = '0000'; $month = '00'; $day = '00';
    list($day,$month,$year) = explode('-', $strDate);
    return @implode('-',[$year,$month,$day]);    
}

function convDateToDisplay($strDate){
    $year = '0000'; $month = '00'; $day = '00';
    list($year,$month,$day) = explode('-', $strDate);
    return @implode('-',[$day,$month,$year]);    
}

/**
 * 
 * @param type $strDate
 * @return type
 */
function DateThai($strDate) {
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strYear = substr($strYear, 2);
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strSeconds = date("s", strtotime($strDate));
    $strMonthCut = Array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];
    return $strDay . " " . $strMonthThai . " " . $strYear ;
}

/**
 * 
 * @param type $strDate
 * @return type
 */
function DateTimeThai($strDate) {
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strYear = substr($strYear, 2);
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strSeconds = date("s", strtotime($strDate));
    $strMonthCut = Array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];
    return $strDay . " " . $strMonthThai . " " . $strYear . " " . $strHour . ":" . $strMinute . " น. ";
}

/**
 * 
 * @global type $_GET
 * @param type $size
 * @param type $count
 * @return string
 */
function pagination($size, $count) {
    global $_GET;
    
    $page['p'] = isset($_GET['p']) ? $_GET['p'] : 1;
    $page['start'] = ($page['p']==1) ? 0 : ($size*$page['p'])-$size;
    $page['size'] = $size>$count?$count:$size;
    $num = (int)($count / $size);
    $num = ($count % $size) ? $num+1 : $num;
    
    $page['widget'] = '<div class="row"><div class="col-sm-12">';   
    $page['widget'] .= 'แสดง '.($page['start']+1).' ถึง '.($page['size']*$page['p']).' จาก '.$count; 
    
    $page['widget'] .= '<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">';
    $page['widget'] .='<ul class="pagination">';
    $previous=(($page['p']-1)>0)?($page['p']-1):'';
    $page['widget'] .='<li class="paginate_button previous '.($previous==''?'disabled':'').'" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="' . ($previous?genGet(['p'=>$previous]):'#') . '">Previous</a></li>';

    for ($i = 1; $i <= $num; $i++) {
        $active = ($i==$page['p'])?'active':'';
        $page['widget'] .='<li class="paginate_button '.$active.'" aria-controls="dataTables-example" tabindex="0"><a href="' . genGet(['p'=>$i]) . '">' . $i . '</a></li>';
    }
    $next = (($page['p']+1)<=$num)?($page['p']+1):'';
    $page['widget'] .='<li class="paginate_button next '.($next==''?'disabled':'').'" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="' . ($next?genGet(['p'=>$next]):'#') . '">Next</a></li>';
    $page['widget'] .='</ul></div></div></div>';
    return $page;
}

/**
 * 
 * @global type $_GET
 * @param type $add
 * @return type
 */
function genGet($add=[]) {
    global $_GET;
    $param = [];
    $_GET = $add?  array_merge($_GET,$add):$_GET;
    foreach ($_GET as $key => $val) {
        $param[] = $key . "=" . $val;
    }
    //$param = $add?  array_merge($param,$add):[];
    return $param ? 'index.php?' . @implode('&', $param) : '';
}

/**
 * 
 * @global type $_GET
 * @return type
 */
function genGetHidden() {
    global $_GET;
    //print_r($_GET);
    $param = [];
    //$_GET = $add?  array_merge($_GET,$add):$_GET;
    foreach ($_GET as $key => $val) {
        $param[$key] = "<input type='hidden' name='".$key ."' value='". $val."' />";
    }
    //print_r($param);
    //$param = $add?  array_merge($param,$add):[];
    return $param ?  @implode('', $param) : '';
}

/**
 * 
 * @global type $db
 * @param type $id
 * @return type
 */
function findPrivilege($id){
    global $db;
    $privilege = $db->select("privilege")->where(['pv_id = '.$id])->one();
    return $privilege->pv_id==$id?$privilege->pv_name:'ไม่พบข้อมูล';

}
