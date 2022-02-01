<?php

$products = [

['id' => 1, 'name' => 'Negro', 'Price' => 25],
['id' => 2, 'name' => 'Latté', 'Price' => 35],
['id' => 3, 'name' => 'Capuchino', 'Price' => 45],

];

$shop = new newCoffeShop();

$shop->addProducts($products);

echo $shop->viewMenu();

?>