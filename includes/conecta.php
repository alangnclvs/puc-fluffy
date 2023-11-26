<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php

// Conecta com o banco de dados MySQL usando a biblioteca mysqli
try {
    $connection = mysqli_connect("localhost", "root", "", "fluffydatabase");

    // Caso algo tenha dado errado, exibe uma mensagem de erro
} catch (mysqli_sql_exception $e) {
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
}
