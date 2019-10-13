<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/ProdutosDAO.php';
        include '../js/funcaoData.php';
                session_start();
        include 'validaLogin.php';
    

        $ProdutosDAO = new ProdutosDAO();
        $Produtos = $ProdutosDAO->getallProdutos();

        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Nome</th>";
        echo "  <th>Preco</th>";
        echo "  <th>IMG</th>";
        echo "  <th>IMG</th>";
         switch ($_SESSION["descricao"]) {
         case "adm":
         echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>"; ;
         break;
         case "funcionario":
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
        echo "</tr>";;
         break;
         case "cliente":
                 echo "  <th>Agendar produto na loja</th>";
        echo "</tr>";;
         break;
                    }




        foreach ($Produtos as $c) {
            echo "<tr>";
            echo "  <td>{$c["Nome"]}</td>";
            echo "  <td>{$c["Preco"]}</td>";
            echo "  <td> {$c["IMG"]}</td>";
            echo '<td><img src="../img/uploads/' . $c['IMG'] . '" /></td>';
            switch ($_SESSION["descricao"]) {
            case "adm":
            
            echo "  <td><a href='../controller/excluirProdutosByIdController.php?id={$c["ID_Produto"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarProdutos.php?id={$c["ID_Produto"]}'>Alterar</a></td>";
            echo "</tr>";
            break;
            case "funcionario":
            echo "  <td><a href='../controller/excluirProdutosByIdController.php?id={$c["ID_Produto"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarProdutos.php?id={$c["ID_Produto"]}'>Alterar</a></td>";
            echo "</tr>"; 
             break;
         case "cliente":
            echo "  <td><a href='../controller/compraController.php?id={$c["ID_Produto"]}'>Cadastrar agenda de produto na loja</a></td>";
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