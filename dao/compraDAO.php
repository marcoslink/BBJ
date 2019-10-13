<?php

require_once 'conexao/conexao.php';



class compraDAO {

        public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }
    



 


    public function salvaragendacliente (compraDTO $compraDTO) {
        try {
            $sql = "INSERT INTO compra   (ID_cliente,ID_Produto) 
                    VALUES ()";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $agendaDTO->getClienteDTO()-> getID_cliente());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function excluircompra($ID_Produto) {
        try {
            $sql = "DELETE FROM compra 
                   WHERE ID_Produto = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_Produto);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
   



    public function updatcompraclienteById(clienteDTO $clienteDTO) {
        try {
            $sql = "UPDATE compra a SET 
                                       WHERE p.ID_cliente= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $compraDTO->getNome());
            $stmt->bindValue(2, $compraDTO->getPreco());
            $stmt->bindValue(3, $compraDTO->getIMG());
            $stmt->bindValue(4, $compraDTO->getID_Produto());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
 
        public function salvarcompraservico(compraDTO $compraDTO) {
        try {
            $sql = "INSERT INTO compra a  (ID_servico) 
                    VALUES (?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $compraDTO->getID_servico());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    
}
