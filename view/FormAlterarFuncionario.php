 </head>
    <?php
    require_once '../dao/FuncionarioDAO.php';
    require_once '../dto/FuncionarioDTO.php';
    include '../js/funcaoData.php';
    
    $ID_Funcionario = $_GET["id"];
    $FuncionarioDAO = new FuncionarioDAO();
    $Funcionario = $FuncionarioDAO->getFuncionarioById($ID_Funcionario);
   
    ?>
    <body>
        <form action="../controller/alterarFuncionarioController.php" method="post">
            <input type="hidden" name="ID_Funcionario" value="<?php echo $Funcionario["ID_Funcionario"]?>"/>
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" value="<?php echo $Funcionario["Usuario"] ?>" name="Usuario" size="50"/></td>
                </tr>
                <tr>
                    <td>Função:</td>
                    <td><input type="text" value="<?php echo $Funcionario["funcao"] ?>" name="funcao" size="50"/></td>
                </tr>
                     <tr>
                    <td>Email:</td>
                    <td><input type="email" value="<?php echo $Funcionario["email"] ?>" name="email" size="50"/></td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" value="<?php echo $Funcionario["Nome"]?>" name="Nome"/></td>
                </tr>  
                <tr>
                    <td>CPF:</td>
                    <td><input type="numbers" value="<?php echo $Funcionario["CPF"]?>" name="CPF"/></td>
                </tr>                
                
                    <td colspan="2">
                        <input type="submit" value="Alterar"/>
                    </td>
                </tr>                                                                
            </table>
        </form>       
    </body>
</html>

