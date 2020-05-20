<?php

require_once "./dbconfig.php";

if(isset($_POST['btn'])){
    $tecnologia = $_POST['tech'];
    $tecnologias = implode(", ", $tecnologia);
    
    $sql = "INSERT INTO techs(tech) VALUES(?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $tecnologias);
    $stmt->execute();
    if($stmt->rowCount() > 0){
       header("location:index.php");
    }

}