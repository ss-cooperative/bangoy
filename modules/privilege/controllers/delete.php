<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules.privilege
 */

if(isset($_GET['id'])){
      //print_r($_POST);
      if($db->delete('privilege',["pv_id = '{$_GET['id']}'"])){
        $db->redirect('privilege/index');
      }else{

      }
}
