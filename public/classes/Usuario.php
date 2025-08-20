<?php
include '../../includes/Conexao.php';

class Usuario
{

    protected $idUsuario;

    private $Nome;

    protected $Email;

    private $Senha;

    private $Perfil;

    protected $Coin;





    public function CadastroUsuario($Nome, $Email, $Senha, $Perfil)
    {
        $conexao = new Conexao();

        // Gerar o hash da senha
        $SenhaHash = password_hash($Senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nome, email, senha, perfil, coin) 
            VALUES ('$Nome', '$Email', '$SenhaHash', '$Perfil', 0)";

        if (mysqli_query($conexao->getConnection(), $sql)) {
            echo "Novo registro criado com sucesso; ";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao->getConnection());
        }
        mysqli_close($conexao->getConnection());
    }

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;

    }

    public function setSenha($Senha)
    {
        if (strlen($Senha) > 8) {
            echo 'Limite de caracteres ultrapassado.';
        }
        ;
        $this->Senha = $Senha;
    }
    public function setEmail($Email)
    {
        if (strlen($Email) > 120) {
            echo 'Limite de caracteres ultrapassado.';
        }
        $this->Email = $Email;
    }
}
?>