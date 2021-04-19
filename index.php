<?php

session_start();

include_once './services/ProductService.php';

if (isset($_SESSION['user'])){
    $user=$_SESSION['user'];
}


$list_product = ProductService::findAll();

include './views/homepage.php';