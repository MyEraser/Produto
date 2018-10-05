<?php

 $host = "localhost";
 $usuario = "root";
 $senha = "";
 $dataBase = "appProdutos";
     
  
        // Create connection
        $conn = new mysqli($host, $usuario, $senha, $dataBase);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
  
?>