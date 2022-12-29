<?php


function data_base($dbname, $user, $pass)
{
    try {
        $connection = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
        return $connection;
    } catch (PDOException $e) {
        return false;
    }
};
