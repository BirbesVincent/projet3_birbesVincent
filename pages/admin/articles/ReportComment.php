<?php

$postTable = App::getInstance()->getTable('Comment');

if (!empty($_POST)) {
    $result = $postTable->report($_POST['id']);
}
    header('Location: index?p=home');
