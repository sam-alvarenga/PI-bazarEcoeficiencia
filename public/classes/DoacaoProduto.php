<?php
include '../../includes/Conexao.php';
include 'Produto.php';
include 'Doacao.php';
$idDoacaoC = new Doacao();
$idProdutoC = new Produto();

class DoacaoProduto
{
    protected $idDoacao = $idDoacaoC->getDoacaoaById($id);

    protected $idProduto = $idProdutoC->getProdutoById($id);

    protected $Quantidade;

    public function CadastrarDoacaoProduto($idProduto, $idDoacao, $Quantidade)
    {
        $conexao = new Conexao();

        $sql = "INSERT INTO trocaproduto (idTroca, idProduto, quantidade) 
            VALUES ('$idDoacao', '$idProduto', '$Quantidade')";

        if (mysqli_query($conexao->getConnection(), $sql)) {
            echo "Novo registro criado com sucesso; ";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao->getConnection());
        }
        mysqli_close($conexao->getConnection());
    }
}
?>