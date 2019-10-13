<?php

include_once __DIR__.'/vendasDTO.php';
class ProdutosDTO  extends vendasDTO {
    
    private $ID_Produto;
    private $Nome;
    private $Preco;
    private $IMG;
    private $vendas_ID_vendas;
 
    
    function getID_Produto() {
        return $this->ID_Produto;
    }

    function getNome() {
        return $this->Nome;
    }

    function getPreco() {
        return $this->Preco;
    }

    function getIMG() {
        return $this->IMG;
    }

    function getVendas_ID_vendas() {
        return $this->vendas_ID_vendas;
    }

    function setID_Produto($ID_Produto) {
        $this->ID_Produto = $ID_Produto;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setPreco($Preco) {
        $this->Preco = $Preco;
    }

    function setIMG($IMG) {
        $this->IMG = $IMG;
    }

    function setVendas_ID_vendas($vendas_ID_vendas) {
        $this->vendas_ID_vendas = $vendas_ID_vendas;
    }


    
}
