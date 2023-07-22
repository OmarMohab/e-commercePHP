<?php

use Core\Session;

$product_id = $_POST['product_id'];


if (!Session::has('cart')) {
    $_SESSION['cart'][] = [
        'product_id' => $product_id,
        'count' => 1
    ];

    redirect("/products/show?id={$product_id}");
    die();
}


foreach ($_SESSION['cart'] as &$cartItem) {
    if ($cartItem['product_id'] == $product_id) {
        $cartItem['count']++;
    }
    redirect("/products/show?id={$product_id}");
    die();
}



$_SESSION['cart'][] = [
    'product_id' => $product_id,
    'count' => 1
];
