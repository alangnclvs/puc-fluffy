<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<!-- Página inical para usuários logados -->
<?php require "../includes/autentica.php"; ?>

<?php include "../includes/topo.php"; ?>

<body>

    <?php include "../includes/menulogado.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-container">

                    <?php
                    // Mensagem de erro caso o usuário ou senha estejam incorretos
                    if (isset($_GET['erro'])) {
                        echo '<div class="alert alert-danger" role="alert">
                        Usuário ou senha inválidos! Tente novamente ou cadastre-se.
                      </div>';
                    }
                    ?>

                    <h1 class="titulo-principal">Olá, <?php echo $_SESSION['nome']; ?></h1>
                    <p class="texto-principal">Você faz parte da comunidade Fluffy! Estamos felizes em tê-lo conosco. Explore e aproveite as funcionalidades para simplificar a gestão da sua clínica e cuidar dos animais de forma inovadora. Se precisar de alguma ajuda, estamos aqui para você.</p>
                    <a href="about.html" class="btn btn-light">Saiba mais</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../img/home.png" alt="Ilustração de um veterinário com um cachorro">
            </div>
        </div>
    </div>

    <!-- Import JavaScript bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/9c668c8ddc.js" crossorigin="anonymous"></script>

</body>

<?php include "../includes/rodape.php"; ?>