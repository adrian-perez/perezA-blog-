<?php
    require_once(__DIR__ . "/../model/database.php");

    $connection = new mysqli($host, $username, $password);
    
    if($connection->connect_error) {
        die("Error: " . $connection->connect_error);
    }
    else {
        echo "Success: " .$connection->host_info;
    }
    
    $exists = $connection->select_db($database);
    
    if(!$exists){
      $query = $connection->query("CREATE DATABASE $database");  
      
      if($query){
          echo "Successfully created database: = . $database";
      }
    }
    else {
        echo "Database already exists.";
    }
   
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11)NOT MULL AUTO_INCREMENT,"
            . "title varchat(255) NOT MULL"
            . "post text NOT MULL"
            . "PRIMARY KEY (id))");
    
    if($query) {
        echo "Succesfully create table: posts";
    }
    
    $connection->close();