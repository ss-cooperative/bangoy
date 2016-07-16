<?php


if(!isset($_SESSION['login'])||$_SESSION['login']==false){
    $_SESSION['login'] = false;
    $_SESSION['login_err'] = null;
}


if(isset($_POST['login'])){
    $user = $db->select('user')->where(["username='{$_POST['username']}'","password='{$_POST['password']}'"])->one();
    //echo "oo".$user->id."00";
    if($user){
        $_SESSION['login'] = true;
        $_SESSION['user_id'] = $user->id;
    }else{
        $_SESSION['login_err'] = "กรุณาตรวจสอบ Username กับ Password";
    }
    header('Location:'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);
}


if(isset($_POST['logout'])||isset($_GET['logout'])){
    $_SESSION['login'] = false;
    unset($_SESSION['user_id']);
    header('Location:index.php');
}
