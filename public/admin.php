<?php
use Core\Auth\DbAuth;

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
$app = App::getInstance();
$auth = new DbAuth($app->getDb());
if(!$auth->logged()){
    $app->forbidden();
}



ob_start();
if ($page === 'home'){
    require ROOT. '/pages/admin/articles/index.php';
} elseif ($page === 'post.detail'){
    require ROOT . '/pages/admin/articles/Article.php';
} elseif ($page === 'posts.edit'){
    require ROOT . '/pages/admin/articles/edit.php';
} elseif ($page === 'post.add'){
    require ROOT . '/pages/admin/articles/addArticle.php';
} elseif ($page === 'post.delete'){
    require ROOT . '/pages/admin/articles/deleteArticle.php';
}

$content = ob_get_clean();
require ROOT . "/pages/admin/templates/default.php";