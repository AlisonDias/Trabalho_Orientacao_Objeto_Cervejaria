<?php
    require_once("../../model/banco.php");

    class listarControllerMesa
     {

        private $lista;

        public function __construct(){
            $this->lista = new Banco();
            $this->criarTabela();
        }

        private function criarTabela(){
            $row = $this->lista->getMesa();
            foreach ($row as $value){
                echo "<tr>";
                echo "<th>".$value['id'] ."</th>";    
                echo "<td>".$value['ocupado'] = ($value['ocupado'] == "0") ? "Livre":"Ocupado" ."</td>";
                echo "<td><a class='btn btn-warning' href='../../view/cerveja/EditarCerveja.php?id=".$value['id']."'>Editar</a><a class='btn btn-danger' href='../../controller/mesa/ControllerDeletarMesa.php?id=".$value['id']."'>Excluir</a></td>";
                echo "</tr>";
            }
        }
    }
?>