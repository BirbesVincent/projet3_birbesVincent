<?php
define('ROOT', dirname(__DIR__)); //file path

//launch Application
require ROOT . '/app/App.php';
App::load();

//using p to redirect to websites pages
if (isset($_GET['p']))
    {$page = $_GET['p'];}
    else
    {$page = 'posts.index';}

//redirection to the right controller according to $_GET['p']
    $page = explode('.', $page);
    if ($page[0] == 'admin'){
        $action = $page[2];
        $controller = '\App\Controller\\' . $page[0] . '\\' . ucfirst($page[1]) . 'Controller';
    } else {
        $action = $page[1];
        $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
    }
    $controller = new $controller;
    $controller->$action();