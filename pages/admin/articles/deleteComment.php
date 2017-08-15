<?php

$postTable = App::getInstance()->getTable('Comment');

if (!empty($_POST)) {
    $result = $postTable->delete($_POST['id']);
    $_SESSION['delete_comment'] = true;
}

header('Location: admin?p=home');