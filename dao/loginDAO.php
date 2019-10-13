<?php

require_once 'conexao/conexao.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($usuario, $senha) {
        try {
            $sql = "SELECT usu.ID_Usuario,u.usuario, p.descricao FROM login u
                    INNER JOIN perfil p ON (u.perfil_id_perfil = p.id_perfil)
                    INNER JOIN usuario usu ON usu.login_ID_Login = u.ID_Login 
                    WHERE usuario=? AND senha=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function salvarlogin(LoginDTO $loginDTO) {
        try {
            $sql = "
                    INSERT INTO login (Usuario,Senha,perfil_id_perfil)
                    VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $loginDTO->getUsuario());
            $stmt->bindValue(2, $loginDTO->getSenha());
            $stmt->bindValue(3, $loginDTO->getperfil_id_perfil());

            $stmt->execute();
            return $this->pdo->lastInsertId();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

}

?>