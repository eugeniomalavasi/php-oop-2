<?php
require_once __DIR__ . "/models/products.php";

$product = new Products("cibo gatti", "lorem ipsum", "sonounaimmagine", 3);

var_dump($product);