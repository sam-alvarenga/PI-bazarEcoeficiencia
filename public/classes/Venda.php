<?php
include_once '../../includes/Conexao.php';

class Venda
{
    public function getVendaById($id)
    {
        $conexao = new Conexao();
        $sql = "SELECT * FROM troca WHERE idTroca=$id";
        $result = mysqli_query($conexao->getConnection(), $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }

    public function CadastrarVenda($idUsuario)
    {
        $conexao = new Conexao();
        $conn = $conexao->getConnection();

        $sql = "INSERT INTO troca (idUsuario) VALUES ('$idUsuario')";

        if (mysqli_query($conn, $sql)) {
            // Retorna o ID da doação recém-criada
            $idDoacao = mysqli_insert_id($conn);
            mysqli_close($conn);
            return $idDoacao;
        } else {
            echo "Erro: " . mysqli_error($conn);
            mysqli_close($conn);
            return false;
        }
    }
}
?>
