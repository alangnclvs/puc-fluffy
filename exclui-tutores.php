<?php

// Abre conexão com o banco de dados
try {
    $connection = mysqli_connect("localhost", "root", "", "fluffydatabase");

    // Se a conexão foi estabelecida, continue com o restante do código
    // ...

} catch (mysqli_sql_exception $e) {
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
}

// Obtém o idTutor via GET
$idTutor = $_GET['idTutor'];

// Monta o comando SQL para recuperar os tutores cadastrados
$sqlTutores = "DELETE FROM tutores WHERE idTutor = $idTutor";

// Envia o comando SQL para o MySQL (tutores)
$resultTutores = mysqli_query($connection, $sqlTutores);

// Redireciona para a página lista-tutores.php
echo header("Location: lista-tutores.php");
