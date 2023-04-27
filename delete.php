<?php

require_once 'db.php';



$id = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$sql = 'DELETE FROM todo WHERE `todo`.`id` ='.$id[1];


if ($connection->query($sql)){
    header('location: /');
}