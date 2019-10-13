<?php
//perguntar como funcionar relaçao entre banco de dados e classe parentes

include_once __DIR__.'/UsuarioDTO.php';
class FuncionarioDTO extends UsuarioDTO {
    private $ID_Funcionario;
    private $funcao;
    private $perfil_id_perfil;
    private $login_ID_Login;
    private $Usuario_ID_Usuario;
    
    function getID_Funcionario() {
        return $this->ID_Funcionario;
    }

    function getFuncao() {
        return $this->funcao;
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

    function setID_Funcionario($ID_Funcionario) {
        $this->ID_Funcionario = $ID_Funcionario;
    }

    function setFuncao($funcao) {
        $this->funcao = $funcao;
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
