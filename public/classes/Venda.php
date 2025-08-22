<?php
include '../../includes/Conexao.php';
include 'Usuario.php';
$idUsuarioC = new Usuario();
class Venda
{

    protected $idVenda;

    protected $idUsuario = $idUsuarioC->getUsuarioById($id);

    public function getVendaById($id)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM troca WHERE idTroca=$id";

        if (mysqli_query($conexao->getConnection(), $sql)) {
            echo "Venda Encontrada";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao->getConnection());
        }
        mysqli_close($conexao->getConnection());
    }

    public function CadastrarVenda($idVenda, $idUsuario)
    {
        $conexao = new Conexao();

        $sql = "INSERT INTO troca (idTroca, idUsuario) 
            VALUES ('$idVenda', '$idUsuario')";

        if (mysqli_query($conexao->getConnection(), $sql)) {
            echo "Novo registro criado com sucesso; ";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao->getConnection());
        }
        mysqli_close($conexao->getConnection());
    }
}
?>