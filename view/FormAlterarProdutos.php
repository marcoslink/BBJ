<!DOCTYPE html>
<?php
 require_once '../dao/ProdutosDAO.php';
 require_once '../dto/ProdutosDTO.php';
    include '../js/funcaoData.php';
    
    $ID_Produto = $_GET["id"];
    $ProdutosDAO = new ProdutosDAO();
    $Produtos = $ProdutosDAO->getprodutoById($ID_Produto);
   
    ?>
    <body>
        <form action="../controller/alterarProdutosController.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="ID_Produto" value="<?php echo $Produtos["ID_Produto"]?>"/>
            <table>
                <tr>
                <td>Nome:</td>
                    <td><input type="text" value="<?php echo $Produtos["Nome"]?>" name="Nome"/></td>
                    <td>Preço:</td>
                    <td><input type="number" value="<?php echo $Produtos["Preco"] ?>" name="Preco" size="50"/></td>
                </tr> 

                    <td>IMG:</td>
                    Select image to upload:
                    <input type="file" name="IMG" id="IMG">                          

                
                    <td colspan="2">
                        <input type="submit" value="Alterar"/>
                    </td>
                </tr>                                                                
            </table>
        </form>       
    </body>
</html>