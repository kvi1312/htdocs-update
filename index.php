<?php
include_once './services/ProductService.php';
include_once './models/UserModel.php';
include './prehandle/getCurrentUser.php';



$DEFAULT_PAGING_LIMIT = 10; //so luong item moi trang

$NB_PAGE_SHOW = 10;


if(isset($_GET['page'])&& isset($_GET['limit'])){
    $page = $_GET['page'];
    $limit = $_GET['limit'];
    $list_product = ProductService::findAllLimit();


} else if (isset($_GET['page'])){
    $page = $_GET['page'];
    $limit = $DEFAULT_PAGING_LIMIT;

} else if (isset($_GET['page'])){
    $page = 1;
    $limit = $_GET['limit'];

} else {
    $page = 1;
    $limit = $DEFAULT_PAGING_LIMIT;
}

$total_page =  ProductService:: findTotalPage($limit);

$list_product = ProductService::findAllLimit($page, $limit);

include './views/homepage.php';