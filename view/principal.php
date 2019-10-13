<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="../imagens/etcfavicon.png" /><!--Usando faviconIcon na Aba do URL-->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <title>Home</title>
    </head>
    <body>
        <?php
        session_start();
        include 'validaLogin.php';
        ?> 
        <table width="100%" border="1">
            <tr>
                <td width="85%">
                    <?php
                    switch ($_SESSION["descricao"]) {
                        case "adm":
                            include './menuAdministrador.php';
                            break;
                        case "funcionario":
                            include './menuFuncionario.php';
                            break;
                        case "cliente":
                            include './menuCliente.php';
                            break;
                    }
                    ?>
                    <br>
                </td>
               
            </tr>
        </table>
 
    </body>
</html>
