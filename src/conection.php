<?php

$config = new \Doctrine\DBAL\Configuration();
//..
$connectionParams = array(
    'dbname' => 'frase',
    'user' => 'root',
    'password' => '123456789',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
//    'charset' => 'UTF-8'  
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);



$sql = "SELECT * FROM articles";

var_dump($sql."  sql");
$stmt = $conn->query($sql); // Simple, but has several drawbacks





$sql2 = "SELECT * FROM articles WHERE id = ?";
$stmt2 = $conn->prepare($sql);
$stmt2->bindValue(1, $id);

var_dump($stmt2);
$stmt2->execute();