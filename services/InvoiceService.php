<?php

include_once dirname(__DIR__).'/dao/InvoiceDAO.php';
include_once dirname(__DIR__).'/dao/ProductDAO.php';

class UserService {

    public static function findCart() {
        return UserDAO::findNewestUncheckoutInvoice();
    }

    public static function addToCart($invoiceId, $productId, $amount) {
        return UserDAO::savePurchaseDetail($invoiceId, $productId, $amount);
    }    

    public static function createInvoice($invoiceId, $productId, $amount) {
        return UserDAO::createEmpty($invoiceId, $productId, $amount);
    }    

}