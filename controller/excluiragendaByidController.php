<?php

require_once '../dao/ServicoDAO.php';
require_once '../dao/agendaDAO.php';

$ID_servico = $_GET["id"];

$agendaDAO = new agendaDAO();
$agendaDAO->excluiragendaservico($ID_servico);


echo "<script>";
echo "window.location.href = '../view/listarAllagenda.php';";
echo "</script> ";
?>