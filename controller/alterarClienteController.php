<?php
    require_once '../dto/clienteDTO.php';
    require_once '../dao/clienteDAO.php';
    require_once '../dao/loginDAO.php';
    require_once '../dao/UsuarioDAO.php';
    include '../js/funcaoData.php';

// recuperei os dados do formulario
$Usuario = $_POST["Usuario"];
$DT_nascimento =$_POST["DT_nascimento"];
$CP_residencia = $_POST["CP_residencia"];
$Nome = $_POST["Nome"];
$CPF = $_POST["CPF"];
$email = $_POST ["email"];
$ID_cliente = $_POST ["ID_cliente"];

$loginDAO = new LoginDAO();
$usuarioDAO = new UsuarioDAO();
$clienteDAO = new clienteDAO();

//VERIFICAR SE O NOME ESTA CADASTRADO
$VerificaNome = $usuarioDAO->getUsuarioByUsuario($Usuario);
$varificaCPF = $usuarioDAO->getUsuarioByCPF($CPF);

if($varificaCPF!=null || !empty($varificaCPF) ){
   $msg = "CPF Já Existe!"; 
   echo "<script>";
   echo "window.location.href = '../view/ListarAllCliente.php?msg={$msg}';";
   echo "</script> ";
}
if($VerificaNome!=null || !empty($VerificaNome) ){


   $msg = "Usuário Já Existe!"; 
   echo "<script>";
   echo "window.location.href = '../view/ListarAllCliente.php?msg={$msg}';";
   echo "</script> ";


}else{

$clienteDTO = new ClienteDTO();
$clienteDTO->setUsuario($Usuario);
$clienteDTO->setDT_nascimento($DT_nascimento);
$clienteDTO->setCP_residencia($CP_residencia);
$clienteDTO->setNome($Nome);
$clienteDTO->setCPF($CPF);
$clienteDTO->setemail($email);
$clienteDTO->setID_cliente($ID_cliente);



$clienteDAO->updateclienteById($clienteDTO);


echo "<script>";
echo "window.location.href = '../view/listarAllCliente.php';";
echo "</script> ";
}
?>
