<?php
include_once './services/ProductService.php';
include_once './models/UserModel.php';
include './prehandle/getCurrentUser.php';

$list_product = ProductService::findAll();

include './views/homepage.php';