<?php
/**
 * Mini MVC Bangory
 * 
 * @author Ahamad Jehduaramea <ahamad.jedu@gmail.com>
 * @copyright 2016 Madone
 * @link https://github.com/firdows/bangoy
 * @package modules
 */

if(isset($_GET['p_id'])){
      //print_r($_POST);
      if($db->delete('patient',["p_id = '{$_GET['p_id']}'"])){
        $db->redirect('patient/index');
      }else{

      }
}
