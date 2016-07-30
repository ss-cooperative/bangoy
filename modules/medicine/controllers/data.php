<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */

if(isset($_GET['q'])){
    
    $data = $db->select('medicine')->where(["m_name LIKE '%{$_GET['q']}%'"])->all();
    //echo $db->sql;
    
    $new_data = [];
    foreach ($data as $val){
        $new_data[]=['id'=>$val->m_id,'text'=>$val->m_name.' (ราคา '.$val->m_price.'บ.)'];
    }
    
    echo json_encode([
        'items'=>$new_data,
        'total_count'=>count($new_data)
        ]);
    
    
}