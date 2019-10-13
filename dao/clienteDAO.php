<?php

require_once 'conexao/conexao.php';

class ClienteDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllCliente() {
        try {
            $sql = "SELECT c.ID_cliente,u.Nome,u.email,u.CPF,c.DT_nascimento,c.CP_residencia,
                    l.Usuario,p.descricao
    FROM
    cliente c
        INNER JOIN
    usuario u ON (c.Usuario_ID_Usuario = u.ID_Usuario)
        INNER JOIN
    login l ON (u.login_ID_Login = l.ID_Login)
        INNER JOIN
    perfil p ON (l.perfil_id_perfil = p.id_perfil)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarCliente(ClienteDTO $clienteDTO) {
        try {
            $sql = "INSERT INTO cliente (DT_nascimento,CP_residencia,Usuario_ID_Usuario) 
                    VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getDT_nascimento());
            $stmt->bindValue(2, $clienteDTO->getCP_residencia());
            $stmt->bindValue(3, $clienteDTO->getUsuario_ID_Usuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function excluirCliente($ID_cliente) {
        try {
            $sql ="DELETE c,u,l 
                    FROM cliente c 
                                    INNER JOIN
                                    usuario u ON (c.Usuario_ID_Usuario = u.ID_Usuario)
                                    INNER JOIN
                                    login l ON (u.login_ID_Login = l.ID_Login)
                                    INNER JOIN
                                    perfil p ON (l.perfil_id_perfil = p.id_perfil)
                                    WHERE ID_cliente = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_cliente);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function getClienteById($ID_cliente) {
        try {
            $sql = "SELECT 
	c.ID_cliente,u.Nome,u.email,u.CPF,c.DT_nascimento,c.CP_residencia,l.Usuario,p.descricao
        FROM
        cliente c
        INNER JOIN
        usuario u ON (c.Usuario_ID_Usuario = u.ID_Usuario)
        INNER JOIN
        login l ON (u.login_ID_Login = l.ID_Login)
        INNER JOIN
        perfil p ON (l.perfil_id_perfil = p.id_perfil)
        WHERE c.ID_cliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_cliente);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }



    public function getClienteByIdUsuario($ID_usuario) {
        try {
            $sql = "SELECT 
	c.ID_cliente,u.Nome,u.email,u.CPF,c.DT_nascimento,c.CP_residencia,l.Usuario,p.descricao
        FROM
        cliente c
        INNER JOIN
        usuario u ON (c.Usuario_ID_Usuario = u.ID_Usuario)
        INNER JOIN
        login l ON (u.login_ID_Login = l.ID_Login)
        INNER JOIN
        perfil p ON (l.perfil_id_perfil = p.id_perfil)
        where u.ID_usuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_usuario);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateclienteById(clienteDTO $clienteDTO) {
        try {
            $sql = "UPDATE cliente c
                                    INNER JOIN
                                    usuario u ON (c.Usuario_ID_Usuario = u.ID_Usuario)
                                    INNER JOIN
                                    login l ON (u.login_ID_Login = l.ID_Login)
                                    INNER JOIN
                                    perfil p ON (l.perfil_id_perfil = p.id_perfil)
                                    SET l.Usuario = ?,
                                        c.DT_nascimento = ?,
                                        c.CP_residencia = ?,
                                        u.Nome = ?,
                                        u.CPF = ?,
                                        u.email = ?
                                        WHERE c.ID_cliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getUsuario());
            $stmt->bindValue(2, $clienteDTO->getDT_nascimento());
            $stmt->bindValue(3, $clienteDTO->getCP_residencia());
            $stmt->bindValue(4, $clienteDTO->getNome());
            $stmt->bindValue(5, $clienteDTO->getCPF());
            $stmt->bindValue(6, $clienteDTO->getemail());
            $stmt->bindValue(7, $clienteDTO->getID_cliente());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
    
      public function compra($ID_cliente, $ID_Produto) {
        try {
            $sql = "INSERT INTO compra (ID_cliente, ID_Produto) 
                    VALUES (?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,$ID_cliente);
            $stmt->bindValue(2,$ID_Produto);

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }  
          public function agenda($ID_cliente, $ID_servico) {
        try {
            $sql = "INSERT INTO agenda (ID_cliente, ID_servico) 
                    VALUES (?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,$ID_cliente);
            $stmt->bindValue(2,$ID_servico);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    } 
    
        public function getagendaById($ID_cliente) {
        try {
            $sql = "SELECT 
    c.ID_cliente, u.Nome as NomeUsuario,s.ID_servico,s.Nome as NomeServico, s.Preco,s.Tipo,s.IMG,s.Data
FROM
    agenda a
        INNER JOIN
    cliente c ON (c.ID_cliente = a.ID_cliente)
        INNER JOIN
    servico s ON (s.ID_servico = a.ID_servico)
        INNER JOIN
    usuario u ON (c.Usuario_ID_Usuario = u.ID_Usuario)
    WHERE c.ID_cliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_cliente);
            
            $stmt->execute();
            $cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
            public function getcompraById($ID_cliente) {
        try {
            $sql = "SELECT 
    c.ID_cliente, u.Nome as NomeUsuario, p.ID_Produto, p.Nome as Nomeproduto, p.Preco, p.IMG
FROM
    compra co
        INNER JOIN
    usuario u ON (co.ID_cliente = u.ID_Usuario)
        INNER JOIN
    cliente c ON (c.Usuario_ID_Usuario = u.ID_Usuario)
        INNER JOIN
    produtos p ON (p.ID_Produto = co.ID_Produto)
    WHERE c.ID_cliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_cliente);
            $stmt->execute();
            $cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>