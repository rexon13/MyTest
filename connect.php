<?php

$host = 'localhost';
$db   = 'mytest';
$user = 'root';
$pass = 'root';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$cnn = new PDO($dsn, $user, $pass);
