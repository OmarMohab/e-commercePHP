<?php

$router->get('/', '/index.php');
$router->get('/about', '/about.php');
$router->get('/contact', '/contact.php');

$router->get('/notes', '/notes/index.php')->only('auth');

$router->get('/notes/show', '/notes/show.php');
$router->delete('/notes/show', '/notes/destroy.php');

$router->get('/notes/edit', '/notes/edit.php');
$router->patch('/notes/show', '/notes/update.php');

$router->get('/notes/create', '/notes/create.php');
$router->post('/notes', '/notes/store.php');

$router->get('/register', '/registration/create.php')->only('guest');
$router->post('/register', '/registration/store.php')->only('guest');

$router->get('/login', '/session/create.php')->only('guest');
$router->post('/sessions', '/session/store.php')->only('guest');
$router->delete('/session', '/session/destroy.php')->only('auth');

$router->get('/products', '/products/index.php');
$router->get('/products/show', '/products/show.php');

$router->post('/cart' , '/cart/store.php');
$router->get('/cart/show', '/cart/show.php');