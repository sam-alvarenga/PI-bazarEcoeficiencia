<?php
include '../../includes/Conexao.php';
include 'Usuario.php';
$idUsuarioC = new Usuario();

class Doacao
{
    protected $idDoacao;

    private $idUsuario = $idUsuarioC->getUsuarioByEmail($Email);

    public function getDoacaoaById($id)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM usuarios WHERE idDoacao=$id";

        if (mysqli_query($conexao->getConnection(), $sql)) {
            echo "Doação Encontrada";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao->getConnection());
        }
        mysqli_close($conexao->getConnection());
    }
    public function CadastrarDoacao($idDoacao, $idUsuario)
    {
        $conexao = new Conexao();

        $sql = "INSERT INTO doacao (idDoacao, idUsuario) 
            VALUES ('$idDoacao', '$idUsuario')";

        if (mysqli_query($conexao->getConnection(), $sql)) {
            echo "Novo registro criado com sucesso; ";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao->getConnection());
        }
        mysqli_close($conexao->getConnection());
    }
}
?>