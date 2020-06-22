<?php
require_once("../../model/banco.php");

class listarControllerItensPedido
{

    private $lista;
    private $pedidoId;

    public function __construct()
    {
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela()
    {

        $this->pedidoId = $_GET['id'];

        $row = $this->lista->getItensPedido($this->pedidoId);
        foreach ($row as $value) {
            
                $cerveja = $this->lista->pesquisaCerveja($value['cerveja_id']);

                echo "<tr>";
                echo "<th>" . $value['id'] . "</th>";
                echo "<th>" . $cerveja['marca'] . "</th>";
                echo "<th>" . $cerveja['medida'] . "</th>";
                echo "<th>" . $value['quantidade'] . "</th>";
                echo "<th>" . $value['valor_unitario'] . "</th>";
                echo "<th>" . $value['valor_total'] . "</th>";

            
        }
    }
}
