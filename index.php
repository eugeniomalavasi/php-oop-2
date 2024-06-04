<?php
require_once __DIR__ . "/models/products.php";

// $product = new Products("cibo gatti", "lorem ipsum", "sonounaimmagine", 3, $_type);

// var_dump($product);

// $cat_prod = new Cat("icona_gatto","cibo gattissimo", "per un gatto meno ignorante", "sonounaimmaginedigattino", 3, $_type);

// $cat_prod->type->setTypeName("cuccia");

// var_dump($cat_prod);


$dog_type = new Type("dog");
$dog_type->setIcon("fa-solid fa-dog");
var_dump($dog_type);

$dog_food = new Products("cibo per cane", 5.99, $dog_type);
$dog_food->setImage_path("https://m.media-amazon.com/images/I/81C3Z9OACqL._AC_UF1000,1000_QL80_.jpg");
var_dump($dog_food);