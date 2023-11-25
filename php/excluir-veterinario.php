<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php

// Conecta com o banco de dados MySQL usando o include do arquivo conecta.php
include "../includes/conecta.php";

$idVet = $_GET['idVet'];

$sqlVets = "DELETE FROM veterinarios WHERE idVet = $idVet";

$resultVets = mysqli_query($connection, $sqlVets);

header("Location: lista-vets.php");
