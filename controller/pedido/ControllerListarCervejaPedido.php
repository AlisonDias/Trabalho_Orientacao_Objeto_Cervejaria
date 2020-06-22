<?php
require_once("../../model/banco.php");

class ControllerListarCervejaPedido
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
        $row = $this->lista->getCerveja();
        foreach ($row as $value) {

            $controle = $value['ativo'];

            if ($controle == 1) {
               
                echo "<option value=" . $value['id'] . ">" . $value['marca'] .' '. $value['medida'] . "</option>";
            }
        }
    }
}
