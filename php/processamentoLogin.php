<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php
// Recebe os dados do formulário de login via POST e armazena nas variáveis
$login = $_POST['email'];
$senha = $_POST['senha'];

// Conecta com o banco de dados MySQL usando o include do arquivo conecta.php
include "../includes/conecta.php";

// Queries para buscar o usuário no banco de dados selecionando o email
$sqlTutores = "SELECT * FROM tutores WHERE emailTutor = '$login'";
$resultadoTutores = mysqli_query($connection, $sqlTutores);

$sqlVets = "SELECT * FROM veterinarios WHERE emailVet = '$login'";
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
        // Se encontrado na tabela tutores, obtém os dados
        $rowTutores = mysqli_fetch_assoc($resultadoTutores);
        // Verifica a senha usando password_verify
        if (password_verify($senha, $rowTutores['senhaTutor'])) {
            // A senha está correta!
            // Armazena os dados na sessão
            $_SESSION['id'] = $rowTutores['idTutor'];
            $_SESSION['nome'] = $rowTutores['nomeTutor'];
            header("Location: inicio.php");
        } else {
            // A senha está incorreta!
            header("Location: index.php?erro=1");
        }
    } elseif ($quantidadeRegistrosVets > 0) {
        // Se encontrado na tabela veterinarios, obtém os dados
        $rowVets = mysqli_fetch_assoc($resultadoVets);
        // Verifica a senha usando password_verify
        if (password_verify($senha, $rowVets['senhaVet'])) {
            // A senha está correta!
            // Armazena os dados na sessão
            $_SESSION['id'] = $rowVets['idVet'];
            $_SESSION['nome'] = $rowVets['nomeVet'];
            header("Location: inicio.php");
        } else {
            // Senha incorreta!
            header("Location: index.php?erro=1");
        }
    }
} else {
    header("Location: index.php?erro=1");
}
