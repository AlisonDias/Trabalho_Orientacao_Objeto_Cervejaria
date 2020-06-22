<?php
require_once("../../model/banco.php");
class UpdatePedido
{
    private $update;


    public function __construct($id)
    {
        $this->update = new Banco();
        if ($this->update->updatePedido($id) == TRUE) {
            echo "<script>alert('Sucesso ao Finalizar Pedido!');document.location='../../view/pedido/listarPedidos.php'</script>";
            
            $this->update->updateMesa($_GET['mesa'], 1);

        } else {
            echo "<script>alert('Erro ao alterar status da mesa!');history.back()</script>";
        }
    }
}
$obj = new UpdatePedido($_GET['id']);
