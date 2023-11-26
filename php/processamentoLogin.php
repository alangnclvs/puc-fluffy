<?php

// Recebe os dados do formulário de login via POST e armazena nas variáveis
$login = $_POST['email'];
$senha = $_POST['senha'];

// Conecta com o banco de dados MySQL usando o include do arquivo conecta.php
include "../includes/conecta.php";

// Queries para buscar o usuário no banco de dados selecionando o email e a senha
$sqlTutores = "SELECT * FROM tutores WHERE emailTutor = '$login' AND senhaTutor = '$senha'";
$resultadoTutores = mysqli_query($connection, $sqlTutores);

$sqlVets = "SELECT * FROM veterinarios WHERE emailVet = '$login' AND senhaVet = '$senha'";
$resultadoVets = mysqli_query($connection, $sqlVets);

// Obtém o número de linhas do resultado
$quantidadeRegistrosTutores = mysqli_num_rows($resultadoTutores);
$quantidadeRegistrosVets = mysqli_num_rows($resultadoVets);

// Se o número de linhas for maior que 0 em qualquer uma das tabelas, o usuário existe no banco de dados
if ($quantidadeRegistrosTutores > 0 || $quantidadeRegistrosVets > 0) {

    // Inicia a sessão
    session_start();

    // Verifica em qual consulta o usuário foi encontrado
    if ($quantidadeRegistrosTutores > 0) {
        // Se encontrado na tabela tutores, obtém os dados e armazena na sessão
        $rowTutores = mysqli_fetch_assoc($resultadoTutores);
        $_SESSION['id'] = $rowTutores['idTutor'];
        $_SESSION['nome'] = $rowTutores['nomeTutor'];
    } elseif ($quantidadeRegistrosVets > 0) {
        // Se encontrado na tabela veterinarios, obtém os dados e armazena na sessão
        $rowVets = mysqli_fetch_assoc($resultadoVets);
        $_SESSION['id'] = $rowVets['idVet'];
        $_SESSION['nome'] = $rowVets['nomeVet'];
    }

    header("Location: inicio.php");
} else {
    header("Location: index.php?erro=1");
}
// até aqui funciona perfeitamente




// AQUI ONDE PAREI O CRUD DO TUTOR E DO VETERINARIO ESTÃO FUNCIONANDO PERFEITAMENTE
// AGORA PRECISO FAZER O LOGIN DO TUTOR E DO VETERINARIO E AUTENTICAR NAS PAGINAS RESTRITAS
// ------------MAS ANTES PRECISO ENVIAR OS DADOS DO FORMULARIO VIA POST
// O LOGIN SERA FEITO VIA POST E A AUTENTICAÇÃO SERA FEITA VIA SESSION
// A AUTENTICAÇÃO SERA FEITA NO ARQUIVO php/autentica.php
// lOGIN SERÁ NUMA PÁGINA SEPARADA php/login-tutor.php E php/login-veterinario.php

// FALTA ISSO DE AUTENTICAR O LOGIN E FAZER A PAGINA RESTRITA
// E FAZER VALIDAÇÃO NO FORMULARIO DE CADASTRO DE TUTOR E VETERINARIO
// E FAZER VALIDAÇÃO NO FORMULARIO DE LOGIN DE TUTOR E VETERINARIO

// APOS ISSO POSSO GRAVAR O VÍDEO (DOMINGO) E ENVIAR O LINK PARA O PROFESSOR