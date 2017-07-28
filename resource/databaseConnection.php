<?php

$dsn = 'mysql:host = localhost';
$username = 'root';
$password = '';

$host = 'localhost' ;// i added this later on the training time of electronics nikaten  after i observed the 
$dbname = 'ecommerce';// above 1st statement , i see that it has one less variable,


try{


$db = new PDO($dsn,$username,$password);
$db ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $ex){
echo 'Database Connetion -- failed<br/>'.$ex->getMessage(); 
}

