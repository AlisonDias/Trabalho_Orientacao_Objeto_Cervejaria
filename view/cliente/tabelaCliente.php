<?php require_once("../../controller/cliente/ControllerListarCliente.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("../corpo/head.php"); ?>

<body>
    <?php include("../corpo/menu.php"); ?>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Data de Nascimento</th>
                <th>Logradouro</th>
                <th>Bairro</th>
                <th>Cep</th>
                <th>Numero</th>
                <th>Cidade</th>
                <th>Status</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php new listarControllerCliente();
            ?>

        </tbody>
        <?php include("../corpo/rodape.php"); ?>
    </table>

    <a class="btn btn-success" href="cadastroCliente.php">Cadastrar Cliente</a>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>