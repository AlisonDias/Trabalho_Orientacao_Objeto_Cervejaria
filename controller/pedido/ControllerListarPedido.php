<?php
    require_once("../../model/banco.php");

    class listarControllerPedido
     {

        private $lista;
        private $controle;

        public function __construct(){
            $this->lista = new Banco();
            $this->criarTabela();
        }

        private function criarTabela(){
            $row = $this->lista->getPedido();
            foreach ($row as $value){
                $controle = $value['finalizado'];
                if($controle == 0){

                $cliente = $this->lista->pesquisaCliente($value['cliente_id']);

                echo "<tr>";
                echo "<th>" . $value['id'] . "</th>";
                echo "<th>" . $cliente['nome'] . "</th>";
                echo "<th>" . $value['mesa_id'] . "</th>";
                echo "<th>" . $value['valor_total'] . "</th>";


            
                echo "<td>
                <a class='btn btn-success' href='../../view/pedido/cadastrarItemPedido.php?id=".$value['id']."'>Adicionar Item</a>";

                echo "<a class='btn btn-danger' href='../../view/pedido/finalizarPedido.php?id=" . $value['id'] . "'>Finalizar</a>
                </td>";
                echo "</tr>";

                }

            }
        }
    }
