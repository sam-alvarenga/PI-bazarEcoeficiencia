<?php
include_once '../../includes/Conexao.php';

class DoacaoProduto
{
    public function CadastrarDoacaoProduto($idProduto, $idDoacao, $quantidade)
    {
        $conexao = new Conexao();

        $sql = "INSERT INTO doacaoproduto (idDoacao, idProduto, quantidade) 
        VALUES ('$idDoacao', '$idProduto', '$quantidade')";


        if (mysqli_query($conexao->getConnection(), $sql)) {
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao->getConnection());
        }
        mysqli_close($conexao->getConnection());
    }
}
?>