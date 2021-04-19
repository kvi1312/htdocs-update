<?php
class ProductModel {
   
    public $id;
    // public $cagetory;
    public $name;
    public $size;
    public $material;
    public $price;
    public $status;
    public $description;
    

    // $data la mot array
    function __construct($data) {
        $this->id = $data['P_ID'];
        // $this->cagetory = $data['C_ID'];
        $this->name = $data['P_NAME'];
        $this->size = $data['P_SIZE'];
        $this->material = $data['P_MATERIAL'];
        $this->price = $data['P_PRICE'];
        $this->status = $data['P_STATUS'];
        $this->description = $data['P_DES'];
    }

}