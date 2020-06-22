<?php
require_once("../../model/pedido.php");
require_once("../../model/Banco.php");
class cadastroPedidoController
{

    private $cadastro;
    private $banco;

    public function __construct()
    {
        $this->cadastro = new Pedido();
        $this->banco = new Banco();
        $this->incluir();
    }

    

    private function incluir()
    {

        
        $clienteId = (int)($_POST['cliente']);
        $mesaId = (int) ($_POST['mesa']);

        $this->cadastro->setClienteId($clienteId);
        $this->cadastro->setMesaId($mesaId);
        $result = $this->cadastro->incluir();
        if ($result >= 1) {

            $this->banco->updateMesa($mesaId, 0);

            echo "<script>alert('Registro incluído com sucesso!');document.location='../../view/corpo/index.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
           
        }
    }
}
$obj = new cadastroPedidoController();
