<?php
require_once '../dao/clienteDAO.php';

$ID_cliente = $_GET["id"];

$clienteDAO = new clienteDAO();
$clienteDAO->excluirCliente($ID_cliente);

echo "<script>";
echo "window.location.href = '../view/listarAllCliente.php';";
echo "</script> ";
?>
