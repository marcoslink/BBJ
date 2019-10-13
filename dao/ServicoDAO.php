<?php

require_once 'conexao/conexao.php';

class ServicoDAO {
     public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllServico() {
        try {
            $sql = "SELECT s.ID_servico,s.Nome,s.Preco,s.Tipo,s.IMG,s.Data
    FROM servico s";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $Servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Servicos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
    public function getAllServicoAgenda($ID_cliente) {
        try {
            $sql = "SELECT s.ID_servico,s.Nome,s.Preco,s.Tipo,s.IMG,s.Data
    FROM servico s 
    where s.ID_servico not in(select ID_servico from agenda where ID_cliente=? )";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_cliente);
            $stmt->execute();
            $Servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Servicos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
    public function getAllServicoDisponivel() {
        try {
            $sql = "SELECT s.ID_servico,s.Nome,s.Preco,s.Tipo,s.IMG,s.Data
    FROM servico s 
    where s.ID_servico not in(select ID_servico from agenda )";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $Servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Servicos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
    

    

    public function salvarServicos(ServicoDTO $ServicoDTO) {
        try {
            $sql = "INSERT INTO servico (Preco,Nome,Tipo,Data,IMG) 
                    VALUES (?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ServicoDTO->getPreco());
            $stmt->bindValue(2, $ServicoDTO->getNome());
            $stmt->bindValue(3, $ServicoDTO->getTipo());
            $stmt->bindValue(4, $ServicoDTO->getData());
            $stmt->bindValue(5, $ServicoDTO->getIMG());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function excluirServico($ID_servico) {
        try {
            $sql = "DELETE s FROM servico s
                   WHERE ID_servico = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_servico);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function getServicoById($ID_servico) {
        try {
            $sql = "SELECT s.ID_servico,s.Nome,s.Preco,s.Tipo,s.Data,s.IMG FROM servico s
                    WHERE s.ID_servico=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_servico);
            $stmt->execute();
            $servico = $stmt->fetch(PDO::FETCH_ASSOC);
            return $servico;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function updateservicoById(ServicoDTO $ServicoDTO) {
        try {
            $sql = "UPDATE servico s SET s.Nome=?,
                                       s.Preco=?,
                                       s.Tipo=?,
                                       s.Data=?,
                                       s.IMG=?
                                       WHERE s.ID_servico= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ServicoDTO->getNome());
            $stmt->bindValue(2, $ServicoDTO->getPreco());
            $stmt->bindValue(3, $ServicoDTO->getTipo());
            $stmt->bindValue(4, $ServicoDTO->getData());
            $stmt->bindValue(5, $ServicoDTO->getIMG());
            $stmt->bindValue(6, $ServicoDTO->getID_servico());
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    
}
