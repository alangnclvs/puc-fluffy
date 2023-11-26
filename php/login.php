<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php include "../includes/topo.php"; ?>


<body>

    <?php include "../includes/menu.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-container">
                    <?php
                    // Mensagem de sucesso ao cadastrar
                    if (isset($_GET['sucess'])) {
                        echo '<div class="alert alert-success" role="alert">
                                Cadastro realizado com sucesso!
                              </div>';
                    }

                    ?>

                    <h1 class="titulo-principal">Bem-vindo ao Fluffy!</h1>
                    <p class="texto-principal">Faça o login abaixo para acessar sua conta de tutor e aproveitar todas as funcionalidades do Fluffy.
                    </p>

                    <form action="processamentoLogin.php" method="POST">

                        <input type="hidden" name="idTutor" value="<?php echo $idTutor; ?>" />

                        <div class="mb-3">
                            <label for="emailTutor" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="email" id="emailTutor" required value="" />
                        </div>

                        <div class="mb-3">
                            <label for="senhaTutor" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senhaTutor" required value="" />
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

    <!-- Import JavaScript bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<script src="https://kit.fontawesome.com/9c668c8ddc.js" crossorigin="anonymous"></script>

<?php include "../includes/rodape.php"; ?>