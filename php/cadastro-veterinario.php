<!-- 
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79 
-->

<?php
// Conecta com o banco de dados MySQL usando o include do arquivo conecta.php
include "../includes/conecta.php";

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

<?php include "../includes/topo.php"; ?>


<body>

    <?php include "../includes/menudeslogado.php"; ?>

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
                            <input type="text" class="form-control" name="nomeVet" id="nomeVet" value="<?php echo $nomeVet; ?>" required />
                        </div>

                        <div class="mb-3">
                            <label for="crmvVet" class="form-label">CRMV</label>
                            <input type="number" class="form-control" name="crmvVet" id="crmvVet" value="<?php echo $crmvVet; ?>" required />
                        </div>

                        <div class="mb-3">
                            <label for="telefoneVet" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="telefoneVet" id="telefoneVet" value="<?php echo $telefoneVet; ?>" required />
                        </div>

                        <div class="mb-3">
                            <label for="emailVet" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="emailVet" id="emailVet" value="<?php echo $emailVet; ?>" required />
                        </div>

                        <div class="mb-3">
                            <label for="senhaVet" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senhaVet" id="senhaVet" value="<?php echo $senhaVet; ?>" required />
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


    <!-- Import JavaScript bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<script src="https://kit.fontawesome.com/9c668c8ddc.js" crossorigin="anonymous"></script>

<?php include "../includes/rodape.php"; ?>