<?php
require_once '../dto/FuncionarioDTO.php';
require_once '../dao/FuncionarioDAO.php';
require_once '../dao/loginDAO.php';
require_once '../dao/UsuarioDAO.php';
include '../js/funcaoData.php';



$Usuario = $_POST["Usuario"];
$Senha = md5($_POST["Senha"]);
$funcao = $_POST ["funcao"];
$Nome = $_POST["Nome"];
$CPF = $_POST ["CPF"];
$ID_Perfil = $_POST ["id_perfil"];
$email = $_POST ["email"];


$loginDAO = new LoginDAO();
$usuarioDAO = new UsuarioDAO();
$FuncionarioDAO = new FuncionarioDAO();


$VerificaNome = $usuarioDAO->getUsuarioByUsuario($Usuario);
$varificaCPF = $usuarioDAO->getUsuarioByCPF($CPF);

if($varificaCPF!=null || !empty($varificaCPF) ){
   $msg = "CPF Já Existe!"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarFuncionario.php?msg={$msg}';";
   echo "</script> ";
}
if($VerificaNome!=null || !empty($VerificaNome) ){


   $msg = "Usuário Já Existe!"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarFuncionario.php?msg={$msg}';";
   echo "</script> ";

    
}else{
$FuncionarioDTO = new FuncionarioDTO();
$FuncionarioDTO->setUsuario($Usuario);
$FuncionarioDTO->setSenha($Senha);
$FuncionarioDTO->setFuncao($funcao);
$FuncionarioDTO->setNome($Nome);
$FuncionarioDTO->setCPF($CPF);
$FuncionarioDTO->setPerfil_id_perfil($ID_Perfil);
$FuncionarioDTO->setEmail($email);



$ID_Login = $loginDAO->salvarlogin($FuncionarioDTO);
$FuncionarioDTO->setLogin_ID_Login($ID_Login);


$ID_Usuario = $usuarioDAO->salvarUsuario($FuncionarioDTO);
$FuncionarioDTO->setUsuario_ID_Usuario($ID_Usuario);


$sucesso = $FuncionarioDAO->salvarFuncionario($FuncionarioDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarFuncionario.php?msg={$msg}';";
   echo "</script> ";
}
}
?>
