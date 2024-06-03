<?php
require_once __DIR__ . "/products.php";
class Dog extends Products
{
    public string $icon;

    public function __construct(string $_icon, string $_name, string $_description, string $_image_path, int $_quantity, Type $_type)
    {
        $this->icon = $_icon;

        parent::__construct($_name,$_description,$_image_path,$_quantity,$_type);
    }
}
