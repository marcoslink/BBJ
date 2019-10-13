<?php


class ServicoDTO {
    
    
   private $ID_servico;
   private $Preco;
   private $Nome;
   private $Tipo;
   private $Data;
   private $IMG;
   
   function getID_servico() {
       return $this->ID_servico;
   }

   function getPreco() {
       return $this->Preco;
   }

   function getNome() {
       return $this->Nome;
   }

   function getTipo() {
       return $this->Tipo;
   }

   function getData() {
       return $this->Data;
   }

   function getIMG() {
       return $this->IMG;
   }

   function setID_servico($ID_servico) {
       $this->ID_servico = $ID_servico;
   }

   function setPreco($Preco) {
       $this->Preco = $Preco;
   }

   function setNome($Nome) {
       $this->Nome = $Nome;
   }

   function setTipo($Tipo) {
       $this->Tipo = $Tipo;
   }

   function setData($Data) {
       $this->Data = $Data;
   }

   function setIMG($IMG) {
       $this->IMG = $IMG;
   }



}
