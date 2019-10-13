<?php

require_once 'conexao/conexao.php';

class FuncionarioDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllFuncionario() {
        try {
            $sql = "SELECT f.ID_Funcionario,f.funcao,u.Nome,u.email,u.CPF,l.Usuario,p.descricao
        FROM funcionario f
        INNER JOIN
        usuario u ON (f.Usuario_ID_Usuario = u.ID_Usuario)
        INNER JOIN
        login l ON (u.login_ID_Login = l.ID_Login)
        INNER JOIN
        perfil p ON (l.perfil_id_perfil = p.id_perfil)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $Funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Funcionarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarFuncionario(FuncionarioDTO $FuncionarioDTO) {
        try {
            $sql = "
                    INSERT INTO funcionario (funcao,Usuario_ID_Usuario)
                    VALUES (?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $FuncionarioDTO->getFuncao());
            $stmt->bindValue(2,$FuncionarioDTO->getUsuario_ID_Usuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    function excluirFuncionario($ID_Funcionario) {
        try {
            $sql = "DELETE f,u,l 
                    FROM Funcionario f 
                                    INNER JOIN
                                    usuario u ON (f.Usuario_ID_Usuario = u.ID_Usuario)
                                    INNER JOIN
                                    login l ON (u.login_ID_Login = l.ID_Login)
                                    INNER JOIN
                                    perfil p ON (l.perfil_id_perfil = p.id_perfil)
                                    WHERE ID_Funcionario = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_Funcionario);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function getFuncionarioById($ID_Funcionario) {
        try {
            $sql = "SELECT 
	f.ID_Funcionario,u.Nome,u.email,u.CPF,f.funcao,l.Usuario,p.descricao
        FROM
        funcionario f
        INNER JOIN
        usuario u ON (f.Usuario_ID_Usuario = u.ID_Usuario)
        INNER JOIN
        login l ON (u.login_ID_Login = l.ID_Login)
        INNER JOIN
        perfil p ON (l.perfil_id_perfil = p.id_perfil)
         WHERE f.ID_Funcionario =?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_Funcionario);
            $stmt->execute();
            $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $funcionario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateFuncionarioById(FuncionarioDTO $FuncionarioDTO) {
        try {
            $sql ="UPDATE funcionario f
                                    INNER JOIN
                                    usuario u ON (f.Usuario_ID_Usuario = u.ID_Usuario)
                                    INNER JOIN
                                    login l ON (u.login_ID_Login = l.ID_Login)
                                    INNER JOIN
                                    perfil p ON (l.perfil_id_perfil = p.id_perfil)
                                    SET l.Usuario = ?,
                                        f.funcao = ?,
                                        u.Nome = ?,
                                        u.CPF = ?,
                                        u.email = ?
                                        WHERE f.ID_Funcionario = ?";
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $FuncionarioDTO->getUsuario());
            $stmt->bindValue(2, $FuncionarioDTO->getFuncao());
            $stmt->bindValue(3, $FuncionarioDTO->getNome());
            $stmt->bindValue(4, $FuncionarioDTO->getCPF());
            $stmt->bindValue(5, $FuncionarioDTO->getEmail());
            $stmt->bindValue(6, $FuncionarioDTO->getID_Funcionario());

            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
            public function salvarFuncionariovendas(FuncionarioDTO $FuncionarioDTO) {
        try {
            $sql = "INSERT INTO vendas (ID_Funcionario) 
                    VALUES (?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $FuncionarioDTO->getID_Funcionario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
           public function salvarFuncionarioproduto(FuncionarioDTO $FuncionarioDTO) {
        try {
            $sql = "INSERT INTO produtos (ID_Funcionario) 
                    VALUES (?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $FuncionarioDTO->getID_Funcionario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
}



