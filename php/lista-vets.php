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
                    <h1 class="titulo-principal">Lista de Veterinários Fluffy</h1>
                    <p class="texto-principal">Confira abaixo a lista de todos os tutores cadastrados no Fluffy.
                        Aqui você encontrará informações sobre cada tutor(a) e seu pet. Caso queira editar ou excluir algum cadastro, clique nos links correspondentes.
                    </p>

                    <!-- Aqui vai ficar a tabela listando os veterinários -->
                    <div class="container mt-5">
                        <h2>Fluffers</h2>
                        <table class="table table-hover">
                            <tr>
                                <td class="table-warning">Id</td>
                                <td class="table-warning">Nome</td>
                                <td class="table-warning">CRMV</td>
                                <td class="table-warning">-</td>
                                <td class="table-warning">-</td>
                            </tr>

                            <?php
                            // AQUI ESTA TUDO FUNCIONANDO, RECEBE A LISTAGEM PERFEITAMENTE

                            // Conecta com o banco de dados MySQL usando a biblioteca mysqli
                            try {
                                $connection = mysqli_connect("localhost", "root", "", "fluffydatabase");

                                // Se a conexão foi estabelecida, continue com o restante do código
                                // ...

                            } catch (mysqli_sql_exception $e) {
                                die("Erro de conexão com o banco de dados: " . $e->getMessage());
                            }

                            // Monta o comando SQL para recuperar os veterinários cadastrados
                            $sqlVets = "SELECT idVet, nomeVet, crmvVet FROM veterinarios";

                            // Envia o comando SQL para o MySQL (veterinários)
                            $resultVets = mysqli_query($connection, $sqlVets);

                            // Verifica se o comando foi executado com sucesso
                            if ($resultVets) {

                                // Loop para exibir as linhas selecionadas
                                while ($row = mysqli_fetch_assoc($resultVets)) {

                                    // Concatatena as linhas selecionadas em uma string
                                    echo " <tr>
                                                <td>" . $row["idVet"] . "</td>
                                                <td>" . $row["nomeVet"] . "</td>
                                                <td>" . $row["crmvVet"] . "</td>
                                                <td><a href='cadastro-veterinario.php?idVet=" . $row["idVet"] . "'>Editar</a></td>
                                                <td><a href='excluir-veterinario.php?idVet=" . $row["idVet"] . "'>Excluir</a></td>
                                            </tr>";
                                }
                            }

                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../img/lista-tutores.png" alt="Ilustração de um veterinário com um cachorro">
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

    <!-- Import Font Awesome -->
    <script src="https://kit.fontawesome.com/9c668c8ddc.js" crossorigin="anonymous"></script>

</body>
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