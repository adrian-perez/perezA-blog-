<?php
    require_once(__DIR__ . "/database.php");
    sessions_start();
    
    $path = "/PerezA-Blog/";
    
    $host ="localhost";
    $username ="root";
    $password ="root";
    $database ="blog_db";
    
    if(){
        $connection = new database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }