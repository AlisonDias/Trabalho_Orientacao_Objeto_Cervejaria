<?php
require_once("Banco.php");

class ItensPedido extends Banco {

    private $id;
    private $cervejaId;
    private $pedidoId;
    private $quantidade;
    private $valorUnitario;
    private $ValorTotalItem;
    

    //Metodos Set
    public function setId($val){
        $this->id = $val;
    }
    public function setCervejaId($val){
        $this->cervejaId = $val;
    }
    public function setPedidoId($val){
        $this->pedidoId = $val;
    }
    public function setQuantidade($val){
        $this->quantidade = $val;
    }
    public function setValorUnitario($val)
    {
        $this->valorUnitario = $val;
    }
    public function setValorTotalItem($val)
    {
        $this->ValorTotalItem = $val;
    }


    //Metodos Get
    public function getId(){
        return $this->id;
    }
    public function getCervejaId(){
        return $this->cervejaId;
    }
    public function getPedidoId(){
        return $this->pedidoId;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }
    public function getValorTotalItem()
    {
        return $this->ValorTotalItem;
    }



    public function incluir(){
        return $this->setItensPedido($this->getCervejaId(),$this->getPedidoId(),$this->getQuantidade(),$this->getValorUnitario(), $this->getValorTotalItem());
    }
}
