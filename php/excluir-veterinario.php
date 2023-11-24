<?php

// Abre conexão com o banco de dados
try {
    $connection = mysqli_connect("localhost", "root", "", "fluffydatabase");

    // Se a conexão foi estabelecida, continue com o restante do código
    // ...

} catch (mysqli_sql_exception $e) {
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
}

$idVet = $_GET['idVet'];

$sqlVets = "DELETE FROM veterinarios WHERE idVet = $idVet";

$resultVets = mysqli_query($connection, $sqlVets);

header("Location: lista-vets.php");
