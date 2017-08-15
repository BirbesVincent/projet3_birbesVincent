<?php

$postTable = App::getInstance()->getTable('Article');

if (!empty($_POST)) {
    $result = $postTable->delete($_POST['id']);
    $_SESSION['delete_article'] = true;
}
    header('Location: admin?p=home');