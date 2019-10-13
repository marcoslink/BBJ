</head>
    <?php
    require_once '../dao/ServicoDAO.php';
    require_once '../dto/ServicoDTO.php';
    include '../js/funcaoData.php';
    
    $ID_servico = $_GET["id"];
    $ServicoDAO = new ServicoDAO();
    $Servico = $ServicoDAO->getServicoById($ID_servico);
   
    ?>
    <body>
        <form action="../controller/alterarServicoController.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="ID_servico" value="<?php echo $Servico["ID_servico"]?>"/>
            <table>
                <tr>
                    <td>Preço:</td>
                    <td><input type="number" value="<?php echo $Servico["Preco"] ?>" name="Preco" size="50"/></td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" value="<?php echo $Servico["Nome"]?>" name="Nome"/></td>
                </tr>  
                <tr>
                    <td>Tipo:</td>
                    <td><input type="text" value="<?php echo $Servico["Tipo"]?>" name="Tipo"/></td>
                </tr> 
                    <td>IMG:</td>
                    Select image to upload:
                    <input type="file" name="IMG" id="IMG">                          
                <tr/>
                <tr>
                    <td>Data e Hora:</td>
                    <td><input type="datetime-local" name="data" size="50" value="<?=$Servico["Data"]?>"/></td>
                </tr>
                
                    <td colspan="2">
                        <input type="submit" value="Alterar"/>
                    </td>
                </tr>                                                                
            </table>
        </form>       
    </body>
</html>
