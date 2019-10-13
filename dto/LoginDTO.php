<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginDTO
 *
 * @author alunoetc
 */

include_once __DIR__.'/perfilDTO.php';
class  LoginDTO extends perfilDTO {
    private $ID_Login;
    private $Usuario;
    private $Senha;
    private $perfil_id_perfil;
    
    
    function getID_Login() {
        return $this->ID_Login;
    }

    function getUsuario() {
        return $this->Usuario;
    }

    function getSenha() {
        return $this->Senha;
    }

    function getPerfil_id_perfil() {
        return $this->perfil_id_perfil;
    }

    function setID_Login($ID_Login) {
        $this->ID_Login = $ID_Login;
    }

    function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    function setSenha($Senha) {
        $this->Senha = $Senha;
    }

    function setPerfil_id_perfil($perfil_id_perfil) {
        $this->perfil_id_perfil = $perfil_id_perfil;
    }


 
}
