<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/ServicoDAO.php';
        include '../js/funcaoData.php';
        session_start();
        include 'validaLogin.php';
        
        require_once '../dao/ClienteDAO.php';


        $ClienteDAO = new ClienteDAO();
        $clienteBD = $ClienteDAO->getClienteByIdUsuario($_SESSION["id"]);
        

        $ServicoDAO = new ServicoDAO();
        $Servicos =array();

        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Nome</th>";
        echo "  <th>Preço</th>";
        echo "  <th>Tipo</th>";
        echo "  <th>IMG</th>";
        echo "  <th>IMG</th>";
        echo "  <th>Data e Hora</th>";
         switch ($_SESSION["descricao"]) {
         case "adm":
             $Servicos = $ServicoDAO->getAllServico();
         echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>"; ;
         break;
         case "funcionario":
               $Servicos = $ServicoDAO->getAllServico();
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>";;
         break;
         case "cliente":
               $Servicos = $ServicoDAO->getAllServicoDisponivel();
                 echo "  <th>Agendar Serviço</th>";
        echo "</tr>";;
         break;
                    }



        foreach ($Servicos as $c) {
            echo "<tr>";
            echo "  <td>{$c["Nome"]}</td>";
            echo "  <td>{$c["Preco"]}</td>";
            echo "  <td>{$c["Tipo"]}</td>";
            echo "  <td> {$c["IMG"]}</td>";
            echo '<td><img src="../img/uploads/' . $c['IMG'] . '" /></td>';
            echo "  <td> {$c["Data"]}</td>";
            switch ($_SESSION["descricao"]) {
         case "adm":
             echo "  <td><a href='../controller/excluirServicosByIdController.php?id={$c["ID_servico"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarServico.php?id={$c["ID_servico"]}'>Alterar</a></td>";
            echo "</tr>";
            echo "</tr>"; 
         break;
         case "funcionario":
            echo "  <td><a href='../controller/excluirServicosByIdController.php?id={$c["ID_servico"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarServico.php?id={$c["ID_servico"]}'>Alterar</a></td>";
            echo "</tr>";
        echo "</tr>";
         break;
         case "cliente":
            echo "  <td><a href='../controller/agendaController.php?id={$c["ID_servico"]}'>Agendar</a></td>";
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
