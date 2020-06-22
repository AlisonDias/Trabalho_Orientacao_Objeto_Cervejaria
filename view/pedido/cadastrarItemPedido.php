<!DOCTYPE html>
<html lang="pt-br">

<?php include("../corpo/head.php"); ?>

<body>
    <?php include("../corpo/menu.php"); ?>
    <?php include("../../controller/pedido/ControllerListarCervejaPedido.php"); ?>
    <?php include("../../controller/pedido/ControllerListarPedidoId.php"); ?>
    <div class="row">
        <form method="post" action="../../controller/pedido/ControllerCadastroItemPedido.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <select class="form-control" name="cerveja" id="cerveja">
                <?php new ControllerListarCervejaPedido(); ?>
            </select>
            <select class=" form-control" name="pedido" id="pedido">
                <?php new ControllerListarPedidoId(); ?>
            </select>
            <input class="form-control" type="number" id="quantidade" name="quantidade" placeholder="Quantidade" required>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar Item Pedido</button>
            </div>
        </form>
        <?php include("../corpo/rodape.php"); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>