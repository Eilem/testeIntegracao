<?php

require_once '../index.php';



$app['debug'] = true;

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(

    'db.options'    => array(

        'driver'        => 'pdo_mysql',
        'host'          => 'localhost',
        'dbname'        => 'frase',
        'user'          => 'root',
        'password'      => '123456789',
        'charset'       => 'utf8',
        'driverOptions' => array(1002 => 'SET NAMES utf8',),

        ),

    ));

$app->get("/frases", function(Application $app){
    var_dump("sbfuhsfuobwg");
    $frase = new Frase();
    $frase->setFrase("nova frase com provider");
    $frase->setAutor("Eilemzinhaaa");
    $entity_manager = $app["orm.em"];
    $entity_manager->persist($frase);
    $entity_manager->flush();
    $frases = $entity_manager->getRepository("Frase")->findAll();
var_dump("testando");
    var_dump($frases);
});     
