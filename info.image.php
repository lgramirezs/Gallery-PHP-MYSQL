<?php

require('functions.php');

$connection = data_base('dbname', 'user', 'password');

if (!$connection) {
    die();
}

$id =  isset($_GET['id']) ? (int)$_GET['id']: false;

if ($id) {
    //Query
    $statement = $connection->prepare('SELECT * FROM images WHERE id = :id');
    $statement->execute(array('id'=>$_GET['id']));
    $image = $statement->fetch();

    if (!$image) {
        header('Location: index.php');
    }

}else {
    header('Location: index.php');
}


require('views/image.info.view.php');

;?>