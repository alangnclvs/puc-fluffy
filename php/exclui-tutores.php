<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php

// Conecta com o banco de dados MySQL usando o include do arquivo conecta.php
include "../includes/conecta.php";

// Obtém o idTutor via GET
$idTutor = $_GET['idTutor'];

// Monta o comando SQL para recuperar os tutores cadastrados
$sqlTutores = "DELETE FROM tutores WHERE idTutor = $idTutor";

// Envia o comando SQL para o MySQL (tutores)
$resultTutores = mysqli_query($connection, $sqlTutores);

// Redireciona para a página lista-tutores.php
header("Location: lista-tutores.php");
