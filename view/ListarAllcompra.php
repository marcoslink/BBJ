<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/ProdutosDAO.php';
        require_once '../dao/compraDAO.php';
        require_once '../dao/ClienteDAO.php';
        require_once '../dao/FuncionarioDAO.php';
        include '../js/funcaoData.php';
                session_start();
        include 'validaLogin.php';
    
        $ClienteDAO = new ClienteDAO();
        $clienteBD = $ClienteDAO->getClienteByIdUsuario($_SESSION["id"]);

        $ID_Cliente = $clienteBD["ID_cliente"];
        
        $ProdutosDAO = new ProdutosDAO();
        $Produtos = $ProdutosDAO->getAllCompra();
        $Produtos =array();

        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Nome do Cliente</th>";
        echo "  <th> Produto</th>";
        echo "  <th>Preco</th>";
        echo "  <th>IMG</th>";
        echo "  <th>IMG</th>";
         switch ($_SESSION["descricao"]) {
         case "adm":
             $ProdutosDAO = new ProdutosDAO();        
             $Produtos = $ProdutosDAO->getAllCompra();
         echo "  <th>Cancelar e excluir</th>";
        echo "</tr>"; ;
         break;
         case "funcionario":
              $ProdutosDAO = new ProdutosDAO();        
             $Produtos = $ProdutosDAO->getAllCompra();
        echo "  <th>Cancelar e excluir</th>";
        echo "</tr>";;
         break;
         case "cliente":
             $Produtos = $ClienteDAO->getcompraById($ID_Cliente);
                 echo "  <th>cancelar</th>";
        echo "</tr>";;
         break;
                    }


        foreach ($Produtos as $c) {
            echo "<tr>";
            echo "  <td>{$c["NomeUsuario"]}</td>";
            echo "  <td>{$c["Nomeproduto"]}</td>";
            echo "  <td>{$c["Preco"]}</td>";
            echo "  <td> {$c["IMG"]}</td>";
            echo '<td><img src="../img/uploads/' . $c['IMG'] . '" /></td>';
            switch ($_SESSION["descricao"]) {
            case "adm":
            
            echo "  <td><a href='../controller/excluircompraByIdController.php?id={$c["ID_Produto"]}'>Cancelar e excluir</a></td>";
            echo "</tr>";
            break;
            case "funcionario":
            echo "  <td><a href='../controller/excluircompraByIdController.php?id={$c["ID_Produto"]}'>Cancelar e excluirr</a></td>";
            echo "</tr>"; 
             break;
         case "cliente":
            echo "  <td><a href='../controller/excluircompraByIdController.php?id={$c["ID_Produto"]}'>cancelar</a></td>";
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