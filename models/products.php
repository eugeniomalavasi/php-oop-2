<?php
require_once __DIR__ . "/type.php";

class Products {
    private string $name;
    private string $image_path;
    private float $price;
    private Type $type;

    public function __construct(string $_name, string $_price, Type $_type) {
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_type;
    }

    /**
     * Get the value of image_path
     */ 
    public function getImage_path(): string
    {
        return $this->image_path;
    }

    /**
     * Set the value of image_path
     *
     */ 
    public function setImage_path($_image_path): void
    {
        $this->image_path = $_image_path;
    }
}





// class Products {
//     private string $name;
//     private string $description;
//     private string $image_path;
//     private int $quantity;
//     public Type $type;


    // public function __construct(string $_name, string $_description, string $_image_path, int $_quantity, Type $_type_name) {
    //     $this->name = $_name;
    //     $this->description = $_description;
    //     $this->image_path = $_image_path;
    //     $this->quantity = $_quantity;
    //     $this->type = $_type_name;
    // }
// }