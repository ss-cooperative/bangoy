<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */

if(isset($_GET['account_no'])){
      //print_r($_POST);
      if($db->delete('members',["account_no = '{$_GET['account_no']}'"])){
        $db->redirect('member/index');
      }else{

      }
}
