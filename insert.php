<?php

require('functions.php');

$connection = data_base('dbname', 'user', 'password');

if (!$connection) {
    die();
}

$errors = [];

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $name = filter_var(strtolower($_POST['name']), FILTER_SANITIZE_STRING);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

    if (empty($name)) {
        array_push($errors, 'Name is required');
    }

    if (empty($description)) {
        array_push($errors, 'Description is required');
    }

    //image type 
    if (!empty($_FILES['image']['tmp_name'])) {
        $size = @getimagesize($_FILES["image"]["tmp_name"]);
    } else {
        array_push($errors, 'Load an image is required');
    }

    if ($_POST && empty($errors)) {
        if ($size !== false) {
            $dir = 'uploads/';
            $route = $dir . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $route);
        }else {
            array_push($errors, 'Load an image is required');
        }
    }
    

    if ($_POST && empty($errors)) {
        //data base
        $statement = $connection->prepare('INSERT INTO images(title,imagen,description) VALUES(:name,:title,:description);');
        $statement->execute(array(':name'=>$name, ':title'=>$route, ':description'=>$description));
        //
        $successfully = true;
        //
        header('Location: index.php');
    }
}
require('views/insert.view.php');
