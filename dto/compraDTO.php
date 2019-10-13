<?php


class compraDTO {
  private $produtoDTO;
  private $clienteDTO;
    
  function getID_Produto() {
      return $this->ID_Produto;
  }

  function getID_cliente() {
      return $this->ID_cliente;
  }

  function setID_Produto($ID_Produto) {
      $this->ID_Produto = $ID_Produto;
  }

  function setID_cliente($ID_cliente) {
      $this->ID_cliente = $ID_cliente;
  }


}
