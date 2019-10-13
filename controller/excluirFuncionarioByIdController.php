<?php
require_once '../dao/FuncionarioDAO.php';

$ID_Funcionario = $_GET["id"];

$FuncionarioDAO = new FuncionarioDAO();
$FuncionarioDAO->excluirFuncionario($ID_Funcionario);

echo "<script>";
echo "window.location.href = '../view/listarAllFuncionario.php';";
echo "</script> ";
?>