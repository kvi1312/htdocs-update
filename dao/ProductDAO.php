<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/ProductModel.php';

class ProductDAO {

    private static function queryAll($sql) {
        global $conn;

        $result = $conn->query($sql);

        $listProduct = array();

        while ($row = $result->fetch_assoc()) { 
            array_push($listStudent, new ProductModel($row));
        }

        return $listProduct;
    }

    private static function queryTop($sql) {
        
        global $conn;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // thanh cong
            $row = $result->fetch_assoc();
            return new ProductModel($row);
        } else {
            // that bai
            return null;
        }

    }

    public static function findAll() {
        $sql = "SELECT * FROM SAN_PHAM";
        return ProductDAO::queryAll($sql);
    }
    
}
