<?php

require_once 'conexao/conexao.php';

class agendaDAO {
   
         public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllagenda() {
        try {
            $sql = "SELECT 
    s.ID_servico, s.Nome, s.Preco, s.Tipo, s.IMG, s.Data
FROM
    agenda a
        INNER JOIN
    servico s ON (s.ID_servico = a.ID_servico)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $agendas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $agendas;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


    public function salvaragenda (agendaDTO $agendaDTO) {
        try {
            $sql = "INSERT INTO agenda   (ID_cliente,ID_servico) 
                    VALUES ()";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $agendaDTO->getClienteDTO()-> getID_cliente());
            $stmt->bindValue(2, $agendaDTO->getClienteDTO()-> getID_servico());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
     
        public function salvaragendaFuncionario(agendaDTO $agendaDTO) {
        try {
            $sql = "INSERT INTO agenda   (ID_servico) 
                    VALUES ()";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $agendaDTO->getServicoDTO()->getID_servico());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function excluiragendacliente($ID_cliente) {
        try {
            $sql = "DELETE  FROM agenda 
                   WHERE ID_cliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_cliente);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
    
        public function excluiragendaservico($ID_servico) {
        try {
            $sql = "DELETE FROM agenda 
                   WHERE ID_servico = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_servico);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }



    public function updatagendaclienteById(clienteDTO $clienteDTO) {
        try {
            $sql = "UPDATE agenda a SET 
                                       WHERE p.ID_cliente= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $agendaDTO->getNome());
            $stmt->bindValue(2, $agendaDTO->getPreco());
            $stmt->bindValue(3, $agendaDTO->getIMG());
            $stmt->bindValue(4, $agendaDTO->getID_Produto());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function getAllAgendaTodos() {
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
            usuario u ON (c.Usuario_ID_Usuario = u.ID_Usuario)";
            
            $stmt = $this->pdo->prepare($sql);
    

            $stmt->execute();
            $cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
