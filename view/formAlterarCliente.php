<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <?php
    require_once '../dao/clienteDAO.php';
    require_once '../dto/clienteDTO.php';
    include '../js/funcaoData.php';
    


    $ID_cliente = $_GET["id"];
    $clienteDAO = new clienteDAO();
    $cliente = $clienteDAO->getClienteById($ID_cliente);
   
    ?>
    <body>
        <form action="../controller/alterarClienteController.php" method="post">
            <input type="hidden" name="ID_cliente" value="<?php echo $cliente["ID_cliente"]?>"/>
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" value="<?php echo $cliente["Usuario"] ?>" name="Usuario" size="50"/></td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" value="<?php echo $cliente["Nome"] ?>" name="Nome" size="50"/></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input type="text" value="<?php echo $cliente["CPF"]?>" name="CPF"/></td>
                </tr>                
                <tr>
                    <td>CEP:</td>
                    <td><input type="text" value="<?php echo $cliente["CP_residencia"]?>" name="CP_residencia"/></td>
                </tr>                                
                <tr>
                    <td>Data de Nascimento:</td>
                    <td><input type="date" value="<?php echo $cliente["DT_nascimento"]?>" name="DT_nascimento"/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" value="<?php echo $cliente["email"] ?>" name="email" size="50"/></td>
                </tr>
                           
                <tr>                    
                    <td colspan="2">
                        <input type="submit" value="Alterar"/>
                        <?php die;?>
                    </td>
                </tr>                                                                
            </table>
        </form>       
    </body>
</html>
