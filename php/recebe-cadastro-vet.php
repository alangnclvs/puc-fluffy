<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php

// Conecta com o banco de dados MySQL usando o include do arquivo conecta.php
include "../includes/conecta.php";

$idVet = $_POST['idVet'];
$nomeVet = $_POST['nomeVet'];
$crmvVet = $_POST['crmvVet'];
$telefoneVet = $_POST['telefoneVet'];
$emailVet = $_POST['emailVet'];

if (empty($idVet)) {

    $sqlVets = "INSERT INTO veterinarios (nomeVet, crmvVet, telefoneVet, emailVet) 
                VALUES ('$nomeVet', '$crmvVet', '$telefoneVet', '$emailVet')";

    $resultVets = mysqli_query($connection, $sqlVets);

    if ($resultVets) {
        echo header("Location: lista-vets.php");
    } else {
        echo "Erro ao cadastrar. Tente novamente mais tarde.";
    }
} else {
    $sqlVets = "UPDATE veterinarios SET 
                nomeVet = '$nomeVet', 
                crmvVet = '$crmvVet', 
                telefoneVet = '$telefoneVet', 
                emailVet = '$emailVet' 
                WHERE idVet = $idVet";

    $resultVets = mysqli_query($connection, $sqlVets);

    if ($resultVets) {
        echo header("Location: lista-vets.php");
    } else {
        echo "Erro ao atualizar. Tente novamente mais tarde.";
    }
}
