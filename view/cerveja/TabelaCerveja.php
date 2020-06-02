<?php require_once("../../controller/cerveja/ControllerListarCerveja.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("../corpo/head.php"); ?>

<body>
    <?php include("../corpo/menu.php"); ?>
    <table class="table">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Medida</th>
                <th>Quantidade de Páginas</th>
                <th>Preço</th>
                <th>Data</th>
                <th>Ativo</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php new listarControllerCerveja();
            ?>

        </tbody>
    </table>

    <a class="btn btn-success" href="cadastroCerveja.php">Cadastrar Cerveja</a>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>