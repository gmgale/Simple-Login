<?php 

require_once "config.php";

try{
    $pdo = new PDO ("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("../install/init.sql");
    $pdo->exec($sql);

    echo "<br>Database and table users created successfully.<br>";
} catch(PDOException $err){
    echo "<br>" . $err->getMessage(); 
}