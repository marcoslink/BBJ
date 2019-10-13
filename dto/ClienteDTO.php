<?php

include_once __DIR__.'/UsuarioDTO.php';
class clienteDTO extends UsuarioDTO {
    private $ID_cliente;
    private $DT_nascimento;
    private $CP_residencia;
    private $perfil_id_perfil;
    private $login_ID_Login;
    private $Usuario_ID_Usuario;
    
    function getID_cliente() {
        return $this->ID_cliente;
    }

    function getDT_nascimento() {
        return $this->DT_nascimento;
    }

    function getCP_residencia() {
        return $this->CP_residencia;
    }

    function getPerfil_id_perfil() {
        return $this->perfil_id_perfil;
    }

    function getLogin_ID_Login() {
        return $this->login_ID_Login;
    }

    function getUsuario_ID_Usuario() {
        return $this->Usuario_ID_Usuario;
    }

    function setID_cliente($ID_cliente) {
        $this->ID_cliente = $ID_cliente;
    }

    function setDT_nascimento($DT_nascimento) {
        $this->DT_nascimento = $DT_nascimento;
    }

    function setCP_residencia($CP_residencia) {
        $this->CP_residencia = $CP_residencia;
    }

    function setPerfil_id_perfil($perfil_id_perfil) {
        $this->perfil_id_perfil = $perfil_id_perfil;
    }

    function setLogin_ID_Login($login_ID_Login) {
        $this->login_ID_Login = $login_ID_Login;
    }

    function setUsuario_ID_Usuario($Usuario_ID_Usuario) {
        $this->Usuario_ID_Usuario = $Usuario_ID_Usuario;
    }


}

