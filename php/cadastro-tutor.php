<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php

// Conecta com o banco de dados MySQL usando o include do arquivo conecta.php
include "../includes/conecta.php";

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

<?php include "../includes/topo.php"; ?>


<body>

    <?php include "../includes/menudeslogado.php"; ?>

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

    <!-- Import JavaScript bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<script src="https://kit.fontawesome.com/9c668c8ddc.js" crossorigin="anonymous"></script>

<?php include "../includes/rodape.php"; ?>