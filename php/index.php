<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php include "../includes/topo.php"; ?>

<body>
    <!-- Navbar -->

    <?php include "../includes/menu.php"; ?>

    <!-- Layout -->
    <!-- Um container com duas colunas, uma com um texto e outra com uma imagem -->
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

                    <h1 class="titulo-principal">Gestão para Clínicas Veterinárias</h1>
                    <p class="texto-principal">Na Fluffy, registrar veterinários e tutores é simples e eficiente.
                        Organize informações de tutores e veterinários de forma intuitiva, simplificando a gestão da sua
                        clínica. Acesse a Fluffy de qualquer lugar e descubra uma maneira inovadora de cuidar dos
                        animais. Junte-se a nós e leve sua clínica para novos patamares.</p>
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
</body>


<script src="https://kit.fontawesome.com/9c668c8ddc.js" crossorigin="anonymous"></script>

<?php include "../includes/rodape.php"; ?>