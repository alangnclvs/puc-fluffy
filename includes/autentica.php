<?php

// Re-inicia a sessão 
session_start();

// Se não existir um valor na sessão para o id, o usuário não está logado
if (!isset($_SESSION['id'])) {

    // Redireciona para a página de login com uma mensagem de erro
    header("Location: index.php?autentica=1");
}
