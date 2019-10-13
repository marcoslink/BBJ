<?php


class UsuarioDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    

    public function salvarUsuario(UsuarioDTO $UsuarioDTO) {
        try {
            $sql = "
                    INSERT INTO Usuario (Nome,CPF,Email,login_ID_Login)
                    VALUES (?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $UsuarioDTO->getNome());
            $stmt->bindValue(2, $UsuarioDTO->getCPF());
            $stmt->bindValue(3, $UsuarioDTO->getEmail());
            $stmt->bindValue(4, $UsuarioDTO->getlogin_id_login());

            $stmt->execute();
            return $this->pdo->lastInsertId();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getUsuarioByUsuario($usuario) {
        try {
            $sql = "SELECT * from login where Usuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);

            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getUsuarioByCPF($CPF) {
        try {
            $sql = "SELECT * from usuario u where u.CPF=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $CPF);

            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
