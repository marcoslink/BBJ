<?php

require_once 'conexao/conexao.php';

class ProdutosDAO {
    
    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllProdutos() {
        try {
            $sql = "SELECT p.ID_Produto,p.Nome,p.Preco,p.IMG FROM Produtos p " ;
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $Produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Produtos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function salvarProdutos(ProdutosDTO $ProdutosDTO) {
        try {
            $sql = "INSERT INTO produtos  (Nome,Preco,IMG) 
                    VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ProdutosDTO->getNome());
            $stmt->bindValue(2, $ProdutosDTO->getPreco());
            $stmt->bindValue(3, $ProdutosDTO->getIMG());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function excluirProduto($ID_Produto) {
        try {
            $sql = "DELETE FROM produtos 
                   WHERE ID_Produto = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_Produto);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function getprodutoById($ID_Produto) {
        try {
            $sql = "SELECT p.ID_Produto,p.Nome,p.Preco,p.IMG FROM produtos p
                WHERE p.ID_Produto=?";
                    ;
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_Produto);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }

    public function updateprodutoById(ProdutosDTO $ProdutosDTO) {
        try {
            $sql = "UPDATE produtos p SET p.Nome=?,
                                       p.Preco=?,
                                       p.IMG=?
                                       WHERE p.ID_Produto=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ProdutosDTO->getNome());
            $stmt->bindValue(2, $ProdutosDTO->getPreco());
            $stmt->bindValue(3, $ProdutosDTO->getIMG());
            $stmt->bindValue(4, $ProdutosDTO->getID_Produto());
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
 
        public function salvarProdutoscompra(ProdutosDTO $ProdutosDTO) {
        try {
            $sql = "INSERT INTO compra c  (ID_Produto) 
                    VALUES (?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ProdutosDTO->getID_Produto());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
    
            public function getAllProdutoscompra($ID_cliente) {
        try {
            $sql = "SELECT p.ID_Produto,p.Nome,p.Preco,p.IMG
    FROM produtos p 
    where s.ID_Produto not in(select ID_Produto from compra where ID_cliente=? )";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ID_cliente);
            $stmt->execute();
            $Servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $Produtos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            die();
        }
    }
 
            public function getAllCompra() {
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
    produtos p ON (p.ID_Produto = co.ID_Produto)";
            $stmt = $this->pdo->prepare($sql);
           
            $stmt->execute();
            $cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}

   

