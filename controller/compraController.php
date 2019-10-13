<?php

    require_once '../dto/clienteDTO.php';
    require_once '../dao/clienteDAO.php';
    require_once '../dto/ProdutosDTO.php';
    require_once '../dao/ProdutosDAO.php';
    require_once '../dto/compraDTO.php';
    include '../js/funcaoData.php';
    session_start();
 
    $ID_Cliente = $_SESSION["id"];
    $ID_Produto = $_GET ["id"];
    
    $ClienteDao = new ClienteDAO();
    $sucesso = $ClienteDao->compra($ID_Cliente,$ID_Produto);
    
    if ($sucesso){
   $msg = "Agendado para compra com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/ListarAllProdutos.php?msg={$msg}';";
   echo "</script> ";
}

