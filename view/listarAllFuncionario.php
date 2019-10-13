<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
                require_once '../dao/FuncionarioDAO.php';
                require_once '../dao/loginDAO.php';
                require_once '../dao/UsuarioDAO.php';
                session_start();
                include 'validaLogin.php';
                include '../js/funcaoData.php';



$FuncionarioDAO = new FuncionarioDAO();
$Funcionarios= $FuncionarioDAO->getAllFuncionario();

        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Usuario</th>";
        echo "  <th>Funçao</th>";
        echo "  <th>Nome</th>";
        echo "  <th>Email</th>";
        echo "  <th>CPF</th>";
        switch ($_SESSION["descricao"]) {
                        case "adm":
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
          echo "</tr>";
                            break;
                        case "funcionario":
          echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
          echo "</tr>";
                            break;
                        case "cliente":
        echo "  <th>Excluir</th>";
        echo "  <th>Alterar</th>";
          echo "</tr>";
                            break;
        }

        foreach ($Funcionarios as $c) {
            echo "<tr>";
            echo "  <td>{$c["Usuario"]}</td>";
            echo "  <td>{$c["funcao"]}</td>";
            echo "  <td>{$c["Nome"]}</td>";
            echo "  <td>{$c["email"]}</td>";
            echo "  <td>{$c["CPF"]}</td>";
            switch ($_SESSION["descricao"]) {
                        case "adm":
            echo "  <td><a href='../controller/excluirFuncionarioByIdController.php?id={$c["ID_Funcionario"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarFuncionario.php?id={$c["ID_Funcionario"]}'>Alterar</a></td>";
            echo "</tr>";
                            break;
                        case "funcionario":
            echo "  <td><a href='../controller/excluirFuncionarioByIdController.php?id={$c["ID_Funcionario"]}'></a></td>";
            echo "  <td><a href='formAlterarFuncionario.php?id={$c["ID_Funcionario"]}'></a></td>";
            echo "</tr>";
                            break;
                        case "cliente":
            echo "  <td><a href='../controller/excluirFuncionarioByIdController.php?id={$c["ID_Funcionario"]}'></a></td>";
            echo "  <td><a href='formAlterarFuncionario.php?id={$c["ID_Funcionario"]}'></a></td>";
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
