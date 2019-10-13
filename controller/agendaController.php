<?php

    require_once '../dto/ClienteDTO.php';
    require_once '../dao/ClienteDAO.php';
    require_once '../dto/ServicoDTO.php';
    require_once '../dao/ServicoDAO.php';
    require_once '../dto/agendaDTO.php';
    include '../js/funcaoData.php';
    session_start();
 
    $ID_Usuario = $_SESSION["id"];
    $ID_servico = $_GET ["id"];
    
    $ClienteDao = new ClienteDAO();
    $cliente = $ClienteDao->getClienteByIdUsuario($ID_Usuario);
    
   
    $sucesso = $ClienteDao->agenda($cliente["ID_cliente"],$ID_servico);
    

    if ($sucesso){
   $msg = "Agendado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/ListarAllservico.php?msg={$msg}';";
   echo "</script> ";
}
?>
    
    
