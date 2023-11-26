<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php

// Conecta com o banco de dados MySQL usando o include do arquivo conecta.php
include "../includes/conecta.php";

// Obtém o idVet via GET
$idVet = $_GET['idVet'];

// Monta o comando SQL para recuperar os veterinários cadastrados
$sqlVets = "DELETE FROM veterinarios WHERE idVet = $idVet";

// Envia o comando SQL para o MySQL (veterinários)
$resultVets = mysqli_query($connection, $sqlVets);

// Redireciona para a página lista-vets.php
header("Location: lista-vets.php");
