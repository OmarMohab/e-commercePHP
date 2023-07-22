<?php

use Core\Response;


function dd($variable)
{
    echo "<pre>";
        var_dump($variable);
    echo "</pre>";

    die();
}

function urlis($url)
{
    return $_SERVER['REQUEST_URI'] == $url;
}
function abort($code = 404)
{
    http_response_code($code);
    
    require base_path("views/errors/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/' . $path); 
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

function old($key, $default = '')
{
    return Core\Session::get('old')[$key] ?? $default;
}