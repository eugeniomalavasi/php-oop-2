<?php
require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";

// $product = new Products("cibo gatti", "lorem ipsum", "sonounaimmagine", 3, $_type);

// var_dump($product);

// $cat_prod = new Cat("icona_gatto","cibo gattissimo", "per un gatto meno ignorante", "sonounaimmaginedigattino", 3, $_type);

// $cat_prod->type->setTypeName("cuccia");

// var_dump($cat_prod);


$dog_type = new Type("dog");
$dog_type->setIcon("fa-solid fa-dog");
var_dump($dog_type);

$cat_type = new Type("cat");
$cat_type->setIcon("fa-solid fa-cat");

$dog_food = new Food("cibo per cane", 5.99, $dog_type, 850);
$dog_food->setImage_path("https://m.media-amazon.com/images/I/81C3Z9OACqL._AC_UF1000,1000_QL80_.jpg");
$dog_food->setfood_status("crocchette");
var_dump($dog_food);

$cat_toy = new Toy("batuffolo di lana", 18.99, $cat_type);
$cat_toy->setImage_path("https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1716447362/products/pim/3065890122222_ShebaCreazioniSalsaTac_PolloVerdure85gr_8367_IT/sheba-cibo-umido-per-gatti-in-salsa-con-tacchino-pollo-e-verdure-creazioni-speciali");
var_dump($cat_toy);