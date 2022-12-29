<?php

require('functions.php');

$connection = data_base('dbname', 'user', 'password');

if (!$connection) {
    die();
}


//Pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$imagesbypage = 6;
$init = ($page > 1) ? ($page * $imagesbypage - $imagesbypage) : 0;

$statement = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM images LIMIT $init, $imagesbypage");
$statement->execute(array());
$images = $statement->fetchAll();

if (empty($images)) {
    header('Location: insert.php');
}

$totalimages = $connection->query('SELECT FOUND_ROWS() as total');
$totalimages = $totalimages->fetch()['total'];

$pages = (int)ceil($totalimages / $imagesbypage);

require('views/index.view.php');
