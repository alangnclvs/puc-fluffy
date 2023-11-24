<?php

// Conecta com o banco de dados MySQL usando a biblioteca mysqli
try {
    $connection = mysqli_connect("localhost", "root", "", "fluffydatabase");

    // Se a conexão foi estabelecida, continue com o restante do código
    // ...

} catch (mysqli_sql_exception $e) {
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
}


// Inicializa as variáveis com valores vazios
$idTutor = "";
$nomeTutor = "";
$cpfTutor = "";
$telefoneTutor = "";
$emailTutor = "";
$senhaTutor = "";
$nomePet = "";
$especiePet = "";
$racaPet = "";
$datanascimentoPet = "";

// Se existir um idTutor via GET, então o usuário clicou no link Editar da página lista-tutores.php
// Se a tela de cadastro foi acessada via link Editar, então o idTutor é enviado via GET
if (isset($_GET['idTutor'])) {

    // Obtém o idTutor via GET
    $idTutor = $_GET['idTutor'];

    // Monta o comando SQL para recuperar os tutores cadastrados
    $sqlTutores = "SELECT * FROM tutores WHERE idTutor = $idTutor";

    // Envia o comando SQL para o MySQL (tutores)
    $resultTutores = mysqli_query($connection, $sqlTutores);

    // Armaneza os dados do tutor em um array associativo
    $row = mysqli_fetch_assoc($resultTutores);

    // Guarda os dados do tutor nas variáveis
    $idTutor = $row['idTutor'];
    $nomeTutor = $row['nomeTutor'];
    $cpfTutor = $row['cpfTutor'];
    $telefoneTutor = $row['telefoneTutor'];
    $emailTutor = $row['emailTutor'];
    $senhaTutor = $row['senhaTutor'];
    $nomePet = $row['nomePet'];
    $especiePet = $row['especiePet'];
    $racaPet = $row['racaPet'];
    $datanascimentoPet = $row['datanascimentoPet'];
}

?>

<!--
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" href="../img/icon.png">
    <title>Fluffy</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">FLUFFY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.html">Contato</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastre-se
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastro-tutor.php">Tutor(a)</a></li>
                            <li><a class="dropdown-item" href="cadastro-veterinario.php">Veterinário(a)</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Layout -->
    <!-- Um container com duas colunas, uma com um texto e outra com uma imagem -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-container">
                    <h1 class="titulo-principal">Seja um Tutor(a) Fluffy</h1>
                    <p class="texto-principal">Preencha o formulário abaixo para se cadastrar como tutor(a),
                        compartilhar informações sobre o seu pet e obter acesso a todas as funcionalidades do Fluffy.
                    </p>

                    <form action="recebe-cadastro-tutor.php" method="POST">

                        <input type="hidden" name="idTutor" value="<?php echo $idTutor; ?>" />

                        <div class="mb-3">
                            <label for="nomeTutor" class="form-label">Nome do Tutor</label>
                            <input type="text" class="form-control" name="nomeTutor" id="nomeTutor" value="<?php echo $nomeTutor; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="cpfTutor" class="form-label">CPF</label>
                            <input type="text" class="form-control" name="cpfTutor" id="cpfTutor" value="<?php echo $cpfTutor; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="telefoneTutor" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="telefoneTutor" id="telefoneTutor" value="<?php echo $telefoneTutor; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="emailTutor" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="emailTutor" id="emailTutor" value="<?php echo $emailTutor; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="senhaTutor" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senhaTutor" id="senhaTutor" value="<?php echo $senhaTutor; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="nomePet" class="form-label">Nome do Pet</label>
                            <input type="text" class="form-control" name="nomePet" id="nomePet" value="<?php echo $nomePet; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="especiePet" class="form-label">Espécie</label>
                            <input type="text" class="form-control" name="especiePet" id="especiePet" value="<?php echo $especiePet; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="racaPet" class="form-label">Raça</label>
                            <input type="text" class="form-control" name="racaPet" id="racaPet" value="<?php echo $racaPet; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="datanascimentoPet" class="form-label">Data de Nascimento do Pet</label>
                            <input type="date" class="form-control" name="datanascimentoPet" id="datanascimentoPet" value="<?php echo $datanascimentoPet; ?>" />
                        </div>


                        <button type="submit" class="btn btn-dark">Enviar</button>

                    </form>

                </div>
            </div>
            <div class="col-md-6">
                <img src="../img/form-tutor.png" alt="Ilustração de um veterinário com um cachorro">
            </div>
        </div>
    </div>

    <!-- Modal Login -->
    <div id="modalContainer"></div>
    <script>
        // Use JavaScript para carregar o conteúdo do modal-login.html no elemento modalContainer
        fetch('modal-login.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('modalContainer').innerHTML = data;
            });
    </script>

    <!-- Import JavaScript bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<script src="https://kit.fontawesome.com/9c668c8ddc.js" crossorigin="anonymous"></script>
<footer>
    <div class="row">
        <div class="col span-1-of-2">
            <ul class="footer-nav">
                <li><a href="about.html">Sobre</a></li>
                <li><a href="https://www.apple.com/app-store/" target="_blank">iOS App</a></li>
                <li><a href="https://play.google.com/store/games?hl=en&gl=US" target="_blank">Android App</a></li>
            </ul>
        </div>
        <div class="col span-2-of-2">
            <ul class="social-links">
                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>
            Copyright &copy; 2023 by Alan Gonçalves. All rights reserved.
        </p>
    </div>
</footer>

</html>