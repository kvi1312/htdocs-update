<?php

include_once dirname(__DIR__).'/dao/ProductDAO.php';

class ProductService {

    public static function findAll() {
        return ProductDAO::findAll();
    }

    public static function findAllLimit($page, $limit) {
        return ProductDAO::findAllLimit(($page-1)*$limit, $limit);
    }

    public static function findById($id){
        return ProductDAO::findById($id);
    }
    public static function searchProduct($key) {
        return ProductDAO::findQueryString($key);
    }

    public static function getListSize($productName) {
        return ProductDAO::findAllByName($productName);
    }

    public static function findTotalPage($limit){
        $product_count = ProductDAO::countGroupByName();
        $total_page = $product_count / $limit;
        $total_page = (int) $total_page;
        return $total_page + ((($product_count % $limit) > 0)? 1:0);
    }


    // public static function findAll() {
    //     $cthds = CTDH_DAO::findByMaHd($mahd);
    //     ....
    //     $tongtien;

    //     return $tongtien;
    // }

}