<?php

require_once '../dto/FuncionarioDTO.php';
require_once '../dao/FuncionarioDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do formulario
$usuario = $_POST["Usuario"];
$funcao = $_POST ["funcao"];
$Nome = $_POST["Nome"];
$CPF = $_POST ["CPF"];
$email = $_POST ["email"];
$ID_Funcionario = $_POST ["ID_Funcionario"];



$loginDAO = new LoginDAO();
$usuarioDAO = new UsuarioDAO();
$FuncionarioDAO = new FuncionarioDAO();

$VerificaNome = $usuarioDAO->getUsuarioByUsuario($Usuario);
$varificaCPF = $usuarioDAO->getUsuarioByCPF($CPF);
if($varificaCPF!=null || !empty($varificaCPF) ){
   $msg = "CPF Já Existe!"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarCliente.php?msg={$msg}';";
   echo "</script> ";
}
if($VerificaNome!=null || !empty($VerificaNome) ){


   $msg = "Usuário Já Existe!"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarCliente.php?msg={$msg}';";
   echo "</script> ";


}else{


$FuncionarioDTO = new FuncionarioDTO();
$FuncionarioDTO->setUsuario($usuario);
$FuncionarioDTO->setfuncao($funcao);
$FuncionarioDTO->setNome($Nome);
$FuncionarioDTO->setCPF ($CPF);
$FuncionarioDTO->setemail ($email);
$FuncionarioDTO->setID_Funcionario ($ID_Funcionario);


$FuncionarioDAO->updateFuncionarioById($FuncionarioDTO);


echo "<script>";
echo "window.location.href = '../view/listarAllFuncionario.php';";
echo "</script> ";
}
?>