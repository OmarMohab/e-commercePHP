<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$cartItems = [];

foreach ($_SESSION['cart'] as $cartItem) {
    $cartItems[] = $db->query('SELECT * FROM products WHERE id = :id', [
        'id' => $cartItem['product_id']
    ])->find();
}

view('/cart/show.view.php', [
    'header' => 'My Cart',
    'products' => $cartItems
]);