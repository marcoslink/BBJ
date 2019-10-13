<?php
require_once '../dto/ClienteDTO.php';
require_once '../dao/ClienteDAO.php';
require_once '../dao/loginDAO.php';
require_once '../dao/UsuarioDAO.php';
include '../js/funcaoData.php';

// recuperei os dados do formulario
$Nome = $_POST["Nome"];
$CPF = $_POST["CPF"];
$DT_nascimento = $_POST["DT_nascimento"];
$CP_residencia =$_POST["CP_residencia"];
$email = $_POST ["email"];
$Senha = md5($_POST["Senha"]);
$Usuario = $_POST["Usuario"];
$ID_Perfil = $_POST ["id_perfil"];

$loginDAO = new LoginDAO();
$usuarioDAO = new UsuarioDAO();
$clienteDAO = new clienteDAO();


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
    $clienteDTO = new ClienteDTO();
    $clienteDTO->setUsuario($Usuario);
    $clienteDTO->setSenha($Senha);
    $clienteDTO->setDT_nascimento($DT_nascimento);
    $clienteDTO->setCP_residencia($CP_residencia);
    $clienteDTO->setNome($Nome);
    $clienteDTO->setCPF($CPF);
    $clienteDTO->setEmail($email);
    $clienteDTO->setPerfil_id_perfil($ID_Perfil);


    $ID_Login = $loginDAO->salvarlogin($clienteDTO);
    $clienteDTO->setLogin_ID_Login($ID_Login);


    $ID_Usuario = $usuarioDAO->salvarUsuario($clienteDTO);
    $clienteDTO->setUsuario_ID_Usuario($ID_Usuario);


    $sucesso = $clienteDAO->salvarCliente($clienteDTO);

    if ($sucesso){
       $msg = "Cadastrado com sucesso"; 
       echo "<script>";
       echo "window.location.href = '../view/formCadastrarCliente.php?msg={$msg}';";
       echo "</script> ";
    }
}
?>

