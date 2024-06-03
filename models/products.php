<?php
require_once __DIR__ . "/cat_products.php";
require_once __DIR__ . "/dog_products.php";
require_once __DIR__ . "/type.php";

class Products {
    private string $name;
    private string $description;
    private string $image_path;
    private int $quantity;
    private Type $type;

    public function __construct(string $_name, string $_description, string $_image_path, int $_quantity, Type $_type_name) {
        $this->name = $_name;
        $this->description = $_description;
        $this->image_path = $_image_path;
        $this->quantity = $_quantity;
        $this->type = $_type_name;
    }

}