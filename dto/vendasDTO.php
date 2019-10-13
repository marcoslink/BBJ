<?php

include_once __DIR__.'/FuncionarioDTO.php';
class vendasDTO extends FuncionarioDTO  {
    
   private $ID_vendas;

   function getID_vendas() {
       return $this->ID_vendas;
   }

   function setID_vendas($ID_vendas) {
       $this->ID_vendas = $ID_vendas;
   }


}
