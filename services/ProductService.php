<?php

include_once dirname(__DIR__).'/dao/ProductDAO.php';

class ProductService {

    public static function findAll() {
        return ProductDAO::findAll();
    }

    // public static function findAll() {
    //     $cthds = CTDH_DAO::findByMaHd($mahd);
    //     ....
    //     $tongtien;

    //     return $tongtien;
    // }

}