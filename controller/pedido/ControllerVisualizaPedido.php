<?php
require_once("../../model/banco.php");

class ControllerVisualizarPedido
{

    private $consulta;
   

    public function __construct()
    {
        $this->consulta = new Banco();
        $this->criarTabela();
    }

    private function criarTabela()
    {
        $row = $this->consulta->pesquisaPedido($_GET['id']);
        
            

                $cliente = $this->consulta->pesquisaCliente($row['cliente_id']);

                echo "<tr>";
                echo "<th>" . $row['id'] . "</th>";
                echo "<th>" . $cliente['nome'] . "</th>";
                echo "<th>" . $row['mesa_id'] . "</th>";
                echo "<th>" . $row['valor_total'] . "</th>";



                echo "<td><a class='btn btn-success' href='../../view/pedido/cadastrarItemPedido.php?id=" . $row['id'] . "'>Adicionar Item</a>";
                echo "<td><a class='btn btn-danger' href='../../controller/pedido/ControllerFinalizarPedido.php?id=".$row['id']."&mesa=".$row['mesa_id']."'> Finalizar</a>";
            
            
        
    }
}
