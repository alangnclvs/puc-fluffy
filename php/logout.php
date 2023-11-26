<?php

session_start();

// Remove todas as variáveis da sessão
unset($_SESSION['id']);
unset($_SESSION['nome']);

header("Location: index.php");
