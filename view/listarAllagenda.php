

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/servicoDAO.php';
        require_once '../dao/ClienteDAO.php';
        require_once '../dao/FuncionarioDAO.php';
        require_once '../dao/agendaDAO.php';
        include '../js/funcaoData.php';
        session_start();
                 
        $ClienteDAO = new ClienteDAO();
        $clienteBD = $ClienteDAO->getClienteByIdUsuario($_SESSION["id"]);
//        $cliente = $ClienteDAO->getagendaById($clienteBD["ID_cliente"]);
        $ID_Cliente = $clienteBD["ID_cliente"];
        $ServicoDAO = new ServicoDAO();

        $Servicos =array();
        
        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Nome</th>";
        echo "  <th>Serviço</th>";
        echo "  <th>Preço</th>";
        echo "  <th>Tipo</th>";
        echo "  <th>IMG</th>";
        echo "  <th>IMG</th>";
        echo "  <th>Data e Hora</th>";
        switch ($_SESSION["descricao"]) {
                 case "adm":
             $agendaDAO = new agendaDAO();        
             $Servicos = $agendaDAO->getAllAgendaTodos();
             echo "  <th>Cancelar e excluir</th>";
                break;
         case "funcionario":
             $agendaDAO = new agendaDAO();        
             $Servicos = $agendaDAO->getAllAgendaTodos();
        echo "  <th>Cancelar e excluir</th>";
                break;
                 case "cliente":
               $Servicos = $ClienteDAO->getagendaById($ID_Cliente);
             echo "  <th>cancelar</th>";
        echo "</tr>";;
         break;
         
        }


        foreach ($Servicos as $c) {
            echo "<tr>";
            echo "  <td>{$c["NomeUsuario"]}</td>";
            echo "  <td>{$c["NomeServico"]}</td>";
            echo "  <td>{$c["Preco"]}</td>";
            echo "  <td>{$c["Tipo"]}</td>";
            echo "  <td> {$c["IMG"]}</td>";
            echo '<td><img src="../img/uploads/' . $c['IMG'] . '" /></td>';
            echo "  <td> {$c["Data"]}</td>";
                        switch ($_SESSION["descricao"]) {
         case "adm":
             echo "  <td><a href='../controller/excluiragendaByidController.php?id={$c["ID_servico"]}'>Cancelar e excluir</a></td>";
            echo "</tr>";
            echo "</tr>"; 
         break;
              case "funcionario":
            echo "  <td><a href='../controller/excluiragendaByidController.php?id={$c["ID_servico"]}'>Cancelar e excluir</a></td>";
            echo "</tr>";
        echo "</tr>";
         break;
              case "cliente":
             echo "  <td><a href='../controller/excluiragendaByidController.php?id={$c["ID_servico"]}'>cancelar</a></td>";
            echo "</tr>";

         break;
                    }

        }


        echo "</table>";
        ?>
                <center>
            <?php 
                if (!empty($_GET["msg"])){
                    echo $_GET["msg"]; 
                }
            ?>
        </center>

    </body>
</html>

