<?php
require_once __DIR__ . "/models/products.php";

$product = new Products("cibo gatti", "lorem ipsum", "sonounaimmagine", 3);

var_dump($product);

$cat_prod = new Cat("icona_gatto","cibo gattissimo", "per un gatto meno ignorante", "sonounaimmaginedigattino", 3,);

var_dump($cat_prod);