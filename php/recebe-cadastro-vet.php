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
$senhaVet = $_POST['senhaVet'];

if (empty($idVet)) {

    $sqlVets = "INSERT INTO veterinarios (nomeVet, crmvVet, telefoneVet, emailVet, senhaVet) 
                VALUES ('$nomeVet', '$crmvVet', '$telefoneVet', '$emailVet', '$senhaVet')";

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
                emailVet = '$emailVet',
                senhaVet = '$senhaVet'
                WHERE idVet = $idVet";

    $resultVets = mysqli_query($connection, $sqlVets);

    if ($resultVets) {
        echo header("Location: lista-vets.php");
    } else {
        echo "Erro ao atualizar. Tente novamente mais tarde.";
    }
}
