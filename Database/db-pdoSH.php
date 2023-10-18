<?php

require_once 'dotenv.php';

$dbhost=$_ENV['DB_HOST'];
$dbname=$_ENV['DB_NAME2'];
$dbuser=$_ENV['DB_USERNAME'];
$dbpassword=$_ENV['DB_PASSWORD'];
$apikey=$_ENV['OWA_API_KEY'];


$dsn="mysql:dbname=$dbname;host=$dbhost";

try {
    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    
    $pdo = new PDO($dsn, $dbuser, $dbpassword, $options);

} catch (PDOException $error) {
    echo "Il y a une erreur : $error";
}