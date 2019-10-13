<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perfilDTO
 *
 * @author alunoetc
 */
class perfilDTO {
    private $descricao;
    private $ID_perfil;
    
    function getDescricao() {
        return $this->descricao;
    }

    function getID_perfil() {
        return $this->ID_perfil;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setID_perfil($ID_perfil) {
        $this->ID_perfil = $ID_perfil;
    }

 


}
