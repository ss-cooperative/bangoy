<?php

/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package lib.function
 */

/**
 * จาก 01-10-2016 to 2016-10-01
 * @param type $strDate
 * @return type
 */
function convDateToDb($strDate) {
    $year = '0000';
    $month = '00';
    $day = '00';
    list($day, $month, $year) = explode('-', $strDate);
    return @implode('-', [$year, $month, $day]);
}

/**
 * จาก 2016-10-01 to 01-10-2016
 * @param type $strDate
 * @return type
 */
function convDateToDisplay($strDate) {
    $year = '0000';
    $month = '00';
    $day = '00';
    list($year, $month, $day) = explode('-', $strDate);
    return @implode('-', [$day, $month, $year]);
}

/**
 * แปลงไปใช้กับ DB 01-10-2559 to 2016-10-10
 * @param type $strDate
 * @return type
 */
function convDateThToDb($strDate) {
    $year = '0000';
    $month = '00';
    $day = '00';
    list($day, $month, $year) = explode('-', $strDate);
    return @implode('-', [($year-543), $month, $day]);
}

/**
 * จาก 2016-10-10 to 01-10-2559
 * @param type $strDate
 * @return type
 */
function convDateThToWidget($strDate) {
    $year = '0000';
    $month = '00';
    $day = '00';
    list($year, $month, $day) = explode('-', $strDate);
    return @implode('-', [$day, $month, ($year+543)]);
}

/**
 * จาก 2016-10-01 to 01 ต.ค. 2559
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
    return $strDay . " " . $strMonthThai . " " . $strYear;
}

/**
 * จาก 2016-10-01 to 01 ตุลาคม 2559
 * @param type $strDate
 * @return type
 */
function DateThaiFull($strDate) {
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strSeconds = date("s", strtotime($strDate));
    $strMonthCut = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มินุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤษจิกายน", "ธันวาคม");
    $strMonthThai = $strMonthCut[$strMonth];
    return $strDay . " " . $strMonthThai . " " . $strYear;
}

/**
 * จาก 2016-10-01 10:10:00 to 01 ต.ค. 2559 10:10
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
 * จาก 2016-10-01 10:10:00 to 01 ตุลาคม 2559 10:10
 * @param type $strDate
 * @return type
 */
function DateTimeThaiFull($strDate) {
    $strYear = date("Y", strtotime($strDate)) + 543;
    //$strYear = substr($strYear, 2);
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strSeconds = date("s", strtotime($strDate));
    $strMonthCut = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มินุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤษจิกายน", "ธันวาคม");
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
    $page['start'] = ($page['p'] == 1) ? 0 : ($size * $page['p']) - $size;
    $page['size'] = $size > $count ? $count : $size;
    $num = (int) ($count / $size);
    $num = ($count % $size) ? $num + 1 : $num;

    $page['widget'] = '<div class="row"><div class="col-sm-12">';
    $page['widget'] .= 'แสดง ' . ($page['start'] + 1) . ' ถึง ' . ($page['size'] * $page['p']) . ' จาก ' . $count;

    $page['widget'] .= '<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">';
    $page['widget'] .='<ul class="pagination">';
    $previous = (($page['p'] - 1) > 0) ? ($page['p'] - 1) : '';
    $page['widget'] .='<li class="paginate_button previous ' . ($previous == '' ? 'disabled' : '') . '" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="' . ($previous ? genGet(['p' => $previous]) : '#') . '">Previous</a></li>';

    for ($i = 1; $i <= $num; $i++) {
        $active = ($i == $page['p']) ? 'active' : '';
        $page['widget'] .='<li class="paginate_button ' . $active . '" aria-controls="dataTables-example" tabindex="0"><a href="' . genGet(['p' => $i]) . '">' . $i . '</a></li>';
    }
    $next = (($page['p'] + 1) <= $num) ? ($page['p'] + 1) : '';
    $page['widget'] .='<li class="paginate_button next ' . ($next == '' ? 'disabled' : '') . '" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="' . ($next ? genGet(['p' => $next]) : '#') . '">Next</a></li>';
    $page['widget'] .='</ul></div></div></div>';
    return $page;
}

/**
 * 
 * @global type $_GET
 * @param type $add
 * @return type
 */
function genGet($add = []) {
    global $_GET;
    $param = [];
    $_GET = $add ? array_merge($_GET, $add) : $_GET;
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
        $param[$key] = "<input type='hidden' name='" . $key . "' value='" . $val . "' />";
    }
    //print_r($param);
    //$param = $add?  array_merge($param,$add):[];
    return $param ? @implode('', $param) : '';
}

/**
 * 
 * @global type $db
 * @param type $id
 * @return type
 */
function findPrivilege($id) {
    global $db;
    $privilege = $db->select("privilege")->where(['pv_id = ' . $id])->one();
    return $privilege->pv_id == $id ? $privilege->pv_name : 'ไม่พบข้อมูล';
}

function genSrcImg($fileName, $sub = 'patient/') {
    $file = 'uploads/' . $sub . $fileName . '.jpg';
    $fileStaby = 'uploads/person.jpg';
    if (file_exists($file)) {
        return $file;
    } else {
        return $fileStaby;
    }
}

function uploadFile($file, $subPath = '', $newNamFile = '') {
    $target_dir = _pathUpload . ($subPath ? $subPath . '/' : '');
    $target_file = $target_dir . basename($newNamFile . '.jpg');
    $uploadOk = 1;
    //$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
//    if (isset($file)) {
//        $check = getimagesize($file["tmp_name"]);
//        if ($check !== false) {
//            echo "File is an image - " . $check["mime"] . ".";
//            $uploadOk = 1;
//        } else {
//            echo "File is not an image.";
//            $uploadOk = 0;
//        }
//    }
// Check if file already exists
//    if (file_exists($target_file)) {
//        echo "Sorry, file already exists.";
//        $uploadOk = 0;
//    }
// Check file size
    if ($file["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
//    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
//        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//        $uploadOk = 0;
//    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            //echo "The file " . basename($file["name"]) . " has been uploaded.";
            return $file["tmp_name"];
        } else {
            echo "Sorry, there was an error uploading your file.";
            // exit();
        }
    }
}

/**
 * ปรับสถานของ qqq
 * @global type $db
 * @param type $p_id
 * @param type $status
 */
function updateQqq($p_id, $status) {
    global $db;
    $res = $db->update('qqq', [
        'qstatus' => $status,
            ], [
        "p_id = '{$p_id}'",
        "DATE(qqq.qdate) = CURDATE()"
    ]);
    if(!$res->save()){
        echo $res->sql;
        exit();
    }
}
