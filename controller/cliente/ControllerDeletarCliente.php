<?php
require_once("../../model/banco.php");
class deletaControllerCliente {
    private $deleta;

    public function __construct($id){
        $this->deleta = new Banco();
        if($this->deleta->deleteCliente($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../../view/cliente/tabelaCliente.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
$obj = new deletaControllerCliente($_GET['id']);
?>
