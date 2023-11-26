<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php

session_start();

// Remove todas as variáveis da sessão
unset($_SESSION['id']);
unset($_SESSION['nome']);

// Redireciona para a página inicial (index.php)
header("Location: index.php");
