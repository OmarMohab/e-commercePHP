<?php

use Core\App;
use Core\Database;

//grap all products from the database
$db = App::resolve(Database::class);
$products = $db->query('SELECT * from products')->get();


view('products/index.view.php', [
    'header' => 'shop',
    'products' => $products
]);