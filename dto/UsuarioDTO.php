<?php
include_once __DIR__.'/LoginDTO.php';
class UsuarioDTO extends LoginDTO {
    private $ID_Usuario;
    private $Nome;
    private $CPF;
    private $email;
    private $perfil_id_perfil;
    private $login_ID_Login;
    private $Usuario_ID_Usuario;

    function getID_Usuario() {
        return $this->ID_Usuario;
    }

    function getNome() {
        return $this->Nome;
    }

    function getCPF() {
        return $this->CPF;
    }

    function getEmail() {
        return $this->email;
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

    function setID_Usuario($ID_Usuario) {
        $this->ID_Usuario = $ID_Usuario;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    function setEmail($email) {
        $this->email = $email;
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
