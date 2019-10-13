<?php
require_once '../dao/ProdutosDAO.php';
require_once '../dao/compraDAO.php';

$ID_Produto = $_GET["id"];


$ProdutosDAO = new ProdutosDAO();
$ProdutosDAO->excluirProduto($ID_Produto);

$compraDAO = new compraDAO();
$compraDAO->excluircompra($ID_Produto);

echo "<script>";
echo "window.location.href = '../view/listarAllProdutos.php';";
echo "</script> ";
?>