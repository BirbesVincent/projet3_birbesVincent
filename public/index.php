<?php
define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';

App::load();

if (isset($_GET['p'])){
        $page = $_GET['p'];
    }
    else
    {
        $page = 'home';
    }

ob_start();
if ($page === 'home'){
    require ROOT. '/pages/articles/home.php';
} elseif ($page === 'post.detail'){
    require ROOT . '/pages/articles/Article.php';
} elseif ($page === 'login'){
    require ROOT . '/pages/users/login.php';
}

$content = ob_get_clean();
require ROOT . "/pages/templates/default.php";