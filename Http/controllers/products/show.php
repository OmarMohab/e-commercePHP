<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$product = $db->query('SELECT * FROM products WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

return view('products/show.view.php', [
    'header' => 'product',
    'product' => $product
]);