<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        require_once '../dao/clienteDAO.php';
        require_once '../dto/ClienteDTO.php';
        require_once '../dao/loginDAO.php';
        require_once '../dao/UsuarioDAO.php';
        session_start();
        include 'validaLogin.php';
        include '../js/funcaoData.php';
        
        
        $clienteDAO = new ClienteDAO();
        $clientes = $clienteDAO->getAllCliente();

        echo "<table border='1' align='center'>";
        echo "<tr>";
        echo "  <th>Usuario</th>";
        echo "  <th>Nome</th>";
        echo "  <th>Cpf</th>";
        echo "  <th>CEP</th>";
        echo "  <th>Data de Nascimento</th>";
        echo "  <th>email</th>";
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

          echo "</tr>";
                            break;
}
      


        foreach ($clientes as $c) {
            echo "<tr>";
            echo "  <td>{$c["Usuario"]}</td>";
            echo "  <td>{$c["Nome"]}</td>";
            echo "  <td>{$c["CPF"]}</td>";
            echo "  <td>{$c["CP_residencia"]}</td>";
            echo "  <td>{$c["DT_nascimento"]}</td>";
            echo "  <td>{$c["email"]}</td>";
            switch ($_SESSION["descricao"]) {
                        case "adm":
            echo "  <td><a href='../controller/excluirClienteByIdController.php?id={$c["ID_cliente"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarCliente.php?id={$c["ID_cliente"]}'>Alterar</a></td>";
            echo "</tr>";
            
                            break;
                        case "funcionario":
            echo "  <td><a href='../controller/excluirClienteByIdController.php?id={$c["ID_cliente"]}'>Excluir</a></td>";
            echo "  <td><a href='formAlterarCliente.php?id={$c["ID_cliente"]}'>Alterar</a></td>";
            echo "</tr>";
            
                            break;
                        case "cliente":

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

       
        ?>

    </body>
</html>
