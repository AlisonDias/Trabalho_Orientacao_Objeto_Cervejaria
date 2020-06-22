<?php
require_once("../../model/ItensPedido.php");
require_once("../../model/Banco.php");
require_once("../../model/Pedido.php");
require_once("../../model/Cerveja.php");
class cadastroPedidoController
{

    private $cadastro;
    private $banco;
    private $pedidoSelecionado;
    private $cervejaSelecionada;

    public function __construct()
    {
        $this->cadastro = new ItensPedido();
        $this->banco = new Banco();
        
        
        $this->incluir();
    }



    private function incluir()
    {


        $pedido = (int) ($_POST['pedido']);
        $cerveja = (int) ($_POST['cerveja']);
        $quantidade = (int) ($_POST['quantidade']);
       

        $this->cadastro->setPedidoId($pedido);
        $this->cadastro->setCervejaId($cerveja);
        $this->cadastro->setQuantidade($quantidade);

        $this->pedidoSelecionado = $this->banco->pesquisaPedido($pedido);
        $this->cervejaSelecionada = $this->banco->pesquisaCerveja($cerveja);

        $valorUnitario = (float) $this->cervejaSelecionada['preco'];
        $valorPedidoAnterior = (float) $this->pedidoSelecionado['valor_total'];

        $this->cadastro->setValorUnitario($valorUnitario);
        $this->cadastro->setValorTotalItem($valorUnitario * $quantidade);

       
        
        $result = $this->cadastro->incluir();
        if ($result >= 1) {
            $valorTotal = $valorUnitario * $quantidade + $valorPedidoAnterior;

            $this->banco->updateValorPedido($pedido, $valorTotal);

            $quantidadeCerveja = (int) $this->cervejaSelecionada['quantidade'] - $quantidade;

            $this->banco->updateDiminuirCerveja($cerveja, $quantidadeCerveja);

           echo "<script>alert('Registro incluído com sucesso!');document.location='../../view/corpo/index.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
}
$obj = new cadastroPedidoController();
