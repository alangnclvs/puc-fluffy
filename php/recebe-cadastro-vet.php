<?php

// Abre conexão com o banco de dados
try {
    $connection = mysqli_connect("localhost", "root", "", "fluffydatabase");

    // Se a conexão foi estabelecida, continue com o restante do código
    // ...

} catch (mysqli_sql_exception $e) {
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
}

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
