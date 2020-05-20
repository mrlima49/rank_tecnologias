<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=projeto_rank", "root", "");
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}