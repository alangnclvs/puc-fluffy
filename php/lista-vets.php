<!--
ATIVIDADE SOMATIVA 2
ALAN GONÇALVES
GRUPO 79
-->

<?php // require "../includes/autentica.php"; 
?>

<?php include "../includes/topo.php"; ?>

<body>

    <?php include "../includes/menulogado.php"; ?>

    <!-- Layout -->
    <!-- Um container com duas colunas, uma com um texto e outra com uma imagem -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-container">
                    <?php
                    // Mensagem de sucesso ao atualizar
                    if (isset($_GET['sucess'])) {
                        echo '<div class="alert alert-success" role="alert">
                                Dados atualizados com sucesso!
                              </div>';
                    }

                    ?>

                    <h1 class="titulo-principal">Lista de Veterinários Fluffy</h1>
                    <p class="texto-principal">Confira abaixo a lista de todos os veterinários cadastrados no Fluffy.
                        Aqui você encontrará informações sobre cada profissional e seus atendimentos. Caso deseje editar ou excluir algum cadastro, clique nos links correspondentes.

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

                            // Conecta com o banco de dados MySQL usando o include do arquivo conecta.php
                            include "../includes/conecta.php";

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

    <!-- Import JavaScript bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Import Font Awesome -->
    <script src="https://kit.fontawesome.com/9c668c8ddc.js" crossorigin="anonymous"></script>

</body>

<?php include "../includes/rodape.php"; ?>