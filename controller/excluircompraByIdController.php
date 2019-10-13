<?php

require_once '../dao/ProdutosDAO.php';
require_once '../dao/compraDAO.php';

$ID_Produto = $_GET["id"];

$compraDAO = new compraDAO();
$compraDAO->excluircompra($ID_Produto);


echo "<script>";
echo "window.location.href = '../view/listarAllcompra.php';";
echo "</script> ";
?>

