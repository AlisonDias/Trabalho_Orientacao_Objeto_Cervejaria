<!DOCTYPE html>
<html lang="pt-br">

<?php include("../corpo/head.php"); ?>

<body>
    <?php include("../corpo/menu.php"); ?>
    <?php include("../../controller/pedido/ControllerVisualizaPedido.php"); ?>
    <?php include("../../controller/pedido/ControllerListarItensPedido.php"); ?>

    <table class="table">
        <thead>
            <tr>
                <th>Pedido</th>
                <th>Cliente</th>
                <th>Mesa</th>
                <th>Valor Total</th>
                <th>Adicionar Item</th>
                <th>Finalizar Pedido</th>
            </tr>
        </thead>
        <tbody>
            <?php new ControllerVisualizarPedido();
            ?>

        </tbody>
    </table>

    <br>

    <table class="table">
        <thead>
            <tr>
                <th>Pedido</th>
                <th>Cerveja</th>
                <th>Medida</th>
                <th>Quantidade</th>
                <th>Valor Unitario</th>
                <th>ValorTotal</th>
            </tr>
        </thead>
        <tbody>
            <?php new listarControllerItensPedido();
            ?>

        </tbody>
    </table>



    <?php include("../corpo/rodape.php"); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>