<?php
include '../../includes/Conexao.php';

class Produto
{

    protected $idProduto;

    private $Quantidade;

    private $Categoria;

    protected $Coin;

    public function getProdutoById($id)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM produtos WHERE idProduto=$id";

        if (mysqli_query($conexao->getConnection(), $sql)) {
            echo "Produto Encontrado";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao->getConnection());
        }
        mysqli_close($conexao->getConnection());
    }
}
?>