<?php
// Conecta com o banco de dados MySQL usando a biblioteca mysqli
try {
    $connection = mysqli_connect("localhost", "root", "", "fluffydatabase");

    // Se a conexão foi estabelecida, continue com o restante do código
    // ...

} catch (mysqli_sql_exception $e) {
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
}

$idVet = "";
$nomeVet = "";
$crmvVet = "";
$telefoneVet = "";
$emailVet = "";
$senhaVet = "";


if (isset($_GET['idVet'])) {


    $idVet = $_GET['idVet'];

    // Monta o comando SQL para recuperar os veterinários cadastrados
    $sqlVets = "SELECT * FROM veterinarios WHERE idVet = $idVet";

    // Envia o comando SQL para o MySQL (veterinários)
    $resultVets = mysqli_query($connection, $sqlVets);

    // Verifica se o comando foi executado com sucesso
    $row = mysqli_fetch_assoc($resultVets);


    $nomeVet = $row['nomeVet'];
    $crmvVet = $row['crmvVet'];
    $telefoneVet = $row['telefoneVet'];
    $emailVet = $row['emailVet'];
    $senhaVet = $row['senhaVet'];
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
                    <h1 class="titulo-principal">Seja um Veterinário Fluffy</h1>
                    <p class="texto-principal">Preencha o formulário abaixo para se cadastrar como veterinário(a),
                        compartilhar informações sobre os animais atendidos e obter acesso a todas as funcionalidades do
                        Fluffy.
                    </p>

                    <form action="recebe-cadastro-vet.php" method="POST">

                        <input type="hidden" name="idVet" value="<?php echo $idVet; ?>" />

                        <div class="mb-3">
                            <label for="nomeVet" class="form-label">Nome do Vet</label>
                            <input type="text" class="form-control" name="nomeVet" id="nomeVet" value="<?php echo $nomeVet; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="crmvVet" class="form-label">CRMV</label>
                            <input type="text" class="form-control" name="crmvVet" id="crmvVet" value="<?php echo $crmvVet; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="telefoneVet" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="telefoneVet" id="telefoneVet" value="<?php echo $telefoneVet; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="emailVet" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="emailVet" id="emailVet" value="<?php echo $emailVet; ?>" />
                        </div>

                        <div class="mb-3">
                            <label for="senhaVet" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senhaVet" id="senhaVet" value="<?php echo $senhaVet; ?>" />
                        </div>


                        <button type="submit" class="btn btn-dark">Enviar</button>

                    </form>

                </div>
            </div>
            <div class="col-md-6">
                <img src="../img/form-vet.png" alt="Ilustração de um veterinário com um cachorro">
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