<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php

// Conecta com o banco de dados MySQL usando o include do arquivo conecta.php
include "../includes/conecta.php";

$idTutor = isset($_POST['idTutor']) ? $_POST['idTutor'] : ''; // Importante para o update, senão cria um novo registro
$nomeTutor = $_POST['nomeTutor'];
$cpfTutor = $_POST['cpfTutor'];
$telefoneTutor = $_POST['telefoneTutor'];
$emailTutor = $_POST['emailTutor'];
$senhaTutor = $_POST['senhaTutor'];
$nomePet = $_POST['nomePet'];
$especiePet = $_POST['especiePet'];
$racaPet = $_POST['racaPet'];
$datanascimentoPet = $_POST['datanascimentoPet'];

// Se a variável $idTutor estiver vazia, então o usuário está inserindo um novo tutor
if (empty($idTutor)) {

    // Insere os dados do tutor e pet na tabela tutores do banco de dados fluffydatabase
    $sqlTutores = "INSERT INTO 
                    tutores (nomeTutor, cpfTutor, telefoneTutor, emailTutor, senhaTutor, nomePet, especiePet, racaPet, datanascimentoPet) 
                    VALUES 
                    ('$nomeTutor', '$cpfTutor', '$telefoneTutor', '$emailTutor', '$senhaTutor', '$nomePet', '$especiePet', '$racaPet', '$datanascimentoPet')";

    // Envia os comandos SQL para o banco de dados MySQL
    $resultTutores = mysqli_query($connection, $sqlTutores);

    if ($resultTutores) {
        // Se os dados foram inseridos com sucesso, redireciona para a página lista-tutores.php
        echo header("Location: login.php?sucess=1");
    } else {
        echo "Erro ao cadastrar. Tente novamente mais tarde.";
    }
} else {

    // Monta o comando SQL para atualizar os dados do tutor
    $sqlTutores = "UPDATE tutores SET 
                    nomeTutor = '$nomeTutor', 
                    cpfTutor = '$cpfTutor', 
                    telefoneTutor = '$telefoneTutor', 
                    emailTutor = '$emailTutor', 
                    senhaTutor = '$senhaTutor', 
                    nomePet = '$nomePet', 
                    especiePet = '$especiePet', 
                    racaPet = '$racaPet', 
                    datanascimentoPet = '$datanascimentoPet' 
                    WHERE idTutor = $idTutor";

    // Envia os comandos SQL para o banco de dados MySQL
    $resultTutores = mysqli_query($connection, $sqlTutores);

    if ($resultTutores) {
        // Se os dados foram atualizados com sucesso, redireciona para a página lista-tutores.php
        echo header("Location: lista-tutores.php?sucess=1");
    } else {
        echo "Erro ao atualizar. Tente novamente mais tarde.";
    }
}
