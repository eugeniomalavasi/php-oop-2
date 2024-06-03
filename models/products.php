<?php
require_once __DIR__ . "/cat_products.php";
require_once __DIR__ . "/dog_products.php";

class Products {
    private string $name;
    private string $description;
    private string $image_path;
    private int $quantity;


    public function __construct(string $_name, string $_description, string $_image_path, int $_quantity) {
        $this->name = $_name;
        $this->description = $_description;
        $this->image_path = $_image_path;
        $this->quantity = $_quantity;
    }
}