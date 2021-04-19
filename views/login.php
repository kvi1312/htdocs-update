<?php
 
session_start();

include_once __DIR__.'/models/UserModel.php';
include_once __DIR__.'/services/UserService.php';

if(isset($_GET['action']) && isset($_GET['action'])=='register'){
    $get_register=true;
}

if(isset($_POST['action']) && isset($_POST['action'])=='login'){
    $username = $_POST($username);
    $password = $_POST($password);
    
    $user = UserService::login($username, $password);
    if ( $user != null){
        $_SESSION['USER']= $user;
        header ("location: /index.php");
        die;
    }
    else {
        $error_message = "ĐĂNG NHẬP THẤT BẠI";
    }

}

if(isset($_POST['action']) && isset($_POST['action'])=='register'){
    $user= new UserModel();
    $email= $_POST['email'];
    $address= $_POST['address'];
    $phone= $_POST['phone'];
    $password= $_POST['password'];

    if (UserService::register($user)) {
        header ("location: /signin.php");
        die;
    }
    else {
        $error_message = "ĐĂNG KÝ THẤT BẠI";
    }

}

include_once './view/signin.php';