<?php
$separator = DIRECTORY_SEPARATOR;

require_once "vendor{$separator}autoload.php";




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


$sql = "SELECT * FROM frase";
$stmt = $conn->query($sql); 
$result = $stmt->execute();
$id = 1;


#select
$sql3 = "SELECT * FROM frase WHERE id = ?";
$stmt3 = $conn->prepare($sql3);
$stmt3->bindValue(1, $id);
$stmt3->execute();
var_dump($stmt3->fetchAll());

#update
$count = $conn->executeUpdate('UPDATE frase SET autor = ? WHERE id = ?', array('jwage', 1));
echo $count;

