<?php

$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "simple_login";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

$pdo = new PDO ($dsn, $username, $password, $options);