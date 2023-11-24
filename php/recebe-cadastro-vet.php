<?php

// Abre conexão com o banco de dados
try {
    $connection = mysqli_connect("localhost", "root", "", "fluffydatabase");

    // Se a conexão foi estabelecida, continue com o restante do código
    // ...

} catch (mysqli_sql_exception $e) {
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
}

$idVet = isset($_POST['idVet']) ? $_POST['idVet'] : ''; // Importante para o update, senão cria um novo registro
$nomeVet = $_POST['nomeVet'];
$crmvVet = $_POST['crmvVet'];
$telefoneVet = $_POST['telefoneVet'];
$emailVet = $_POST['emailVet'];
$senhaVet = $_POST['senhaVet'];
// $especialidadeVet = $_POST['especialidadeVet']; testar depois

// Se a variável $idVet estiver vazia, então o usuário está inserindo um novo vet
if (empty($idVet)) {

    // Insere os dados do vet na tabela veterinarios do banco de dados fluffydatabase
    $sqlVeterinarios = "INSERT INTO 
                        veterinarios (nomeVet, crmvVet, telefoneVet, emailVet, senhaVet) 
                        VALUES 
                        ('$nomeVet', '$crmvVet', '$telefoneVet', '$emailVet', '$senhaVet')";

    // Envia os comandos SQL para o banco de dados MySQL
    $resultVeterinarios = mysqli_query($connection, $sqlVeterinarios);

    if ($resultVeterinarios) {
        // Se os dados foram inseridos com sucesso, redireciona para a página lista-veterinarios.php
        echo header("Location: lista-veterinarios.php");
    } else {
        echo "Erro ao cadastrar. Tente novamente mais tarde.";
    }
} else {

    // Monta o comando SQL para atualizar os dados do vet
    $sqlVeterinarios = "UPDATE veterinarios SET 
                        nomeVet = '$nomeVet', 
                        crmvVet = '$crmvVet', 
                        telefoneVet = '$telefoneVet', 
                        emailVet = '$emailVet', 
                        senhaVet = '$senhaVet' 
                        WHERE idVet = $idVet";

    // Envia os comandos SQL para o banco de dados MySQL
    $resultVeterinarios = mysqli_query($connection, $sqlVeterinarios);

    if ($resultVeterinarios) {
        // Se os dados foram atualizados com sucesso, redireciona para a página lista-veterinarios.php
        echo header("Location: lista-veterinarios.php");
    } else {
        echo "Erro ao atualizar. Tente novamente mais tarde.";
    }
}
