<?php
include_once '../../includes/Conexao.php';

class VendaProduto
{
    public function CadastrarVendaProduto($idProduto, $idVenda, $quantidade)
    {
        $conexao = new Conexao();

        $sql = "INSERT INTO trocaproduto (idTroca, idProduto, quantidade) 
                VALUES ('$idVenda', '$idProduto', '$quantidade')";

        if (mysqli_query($conexao->getConnection(), $sql)) {
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao->getConnection());
        }
        mysqli_close($conexao->getConnection());
    }
}
?>
