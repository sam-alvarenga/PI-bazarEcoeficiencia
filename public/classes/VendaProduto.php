<?php
include '../../includes/Conexao.php';
include 'Venda.php';
include 'Produto.php';
$idProdutoC = new Produto();
$idVendaC = new Venda;

class VendaProduto
{
    protected $idVenda = $idVendaC->getVendaById($id);

    protected $idProduto = $idProdutoC->getProdutoById($id);

    protected $Quantidade;

    public function CadastrarVenda($idProduto,$idVenda,$Quantidade){
         $conexao = new Conexao();

        $sql = "INSERT INTO trocaproduto (idTroca, idProduto, quantidade) 
            VALUES ('$idVenda', '$idProduto', '$Quantidade')";

        if (mysqli_query($conexao->getConnection(), $sql)) {
            echo "Novo registro criado com sucesso; ";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao->getConnection());
        }
        mysqli_close($conexao->getConnection());
    }
}
?> 