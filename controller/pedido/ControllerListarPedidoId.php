<?php
require_once("../../model/banco.php");

class ControllerListarPedidoId
{

    private $lista;
    private $controle;

    public function __construct()
    {
        $this->lista = new Banco();
        $this->criarSelect();
    }

    private function criarSelect()
    {
        $row = $this->lista->getPedido();
        foreach ($row as $value) {

            $controle = $value['finalizado'];

            if ($controle == 0) {
                echo "<option value=" . $value['id']. ">" .'Pedido '. $value['id'].' Mesa '. $value['mesa_id']. "</option>";
                
            }
        }
    }
}
