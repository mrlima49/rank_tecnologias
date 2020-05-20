<?php

require_once "./dbconfig.php";

$sql = "SELECT tech from techs";
$stmt = $pdo->prepare($sql);
$stmt->execute();

if($stmt->rowCount() > 0){
    $listaTecnologias = $stmt->fetchAll();
    $tecnologias = [];

    foreach($listaTecnologias as $listaTecnologia){
        $techs = explode(",", $listaTecnologia['tech']);
        foreach($techs as $tech){
            $tech = trim($tech);

            if(isset($tecnologias[$tech])){
                $tecnologias[$tech]++;
            }else{
                $tecnologias[$tech] = 1;
            }
        }
    }
    arsort($tecnologias);
    $tecnologia = array_keys($tecnologias);
    $votos = array_values($tecnologias);
    $qtd = count($tecnologias) -1;
}