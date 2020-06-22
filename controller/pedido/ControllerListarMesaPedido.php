<?php
    require_once("../../model/banco.php");

    class ControllerListarMesaPedido
     {

        private $lista;
        private $controle;

        public function __construct(){
            $this->lista = new Banco();
            $this->criarSelect();
        }

        private function criarSelect(){
            $row = $this->lista->getMesa();
            foreach ($row as $value){
                
                $controle = $value['ocupado'];
                
                if ($controle == 0) {
                echo "<option value=".$value['id'].">" . $value['id'] . "</option>";
                }
                   
                
            }
        }
    }
