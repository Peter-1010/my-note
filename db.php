<?php

try {
    $connection = new PDO('mysql://hostname=localhost;dbname=note', 'root', '',
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ));
} catch (Exception $e){
    echo 'Database not connected';
}

?>