<?php

require_once '../dto/ProdutosDTO.php';
require_once '../dao/ProdutosDAO.php';
include '../js/funcaoData.php';


$Nome = $_POST["Nome"];
$Preco = $_POST["Preco"];
$ID_Produto = $_POST["ID_Produto"];
$file_name = "";
if(isset($_FILES['IMG'])){
      $errors= array();
      $file_name = $_FILES['IMG']['name'];
      $file_size =$_FILES['IMG']['size'];
      $file_tmp =$_FILES['IMG']['tmp_name'];
      $file_type=$_FILES['IMG']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['IMG']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
       if($file_size > 16777215){
         $errors[]='o tamanho do arquivo deve ser no maximo 16 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"..//img/uploads/".$file_name);
        // $imagem =addslashes (file_get_contents($_FILES['IMG']['tmp_name']));
         echo "Success";
      }else{
         print_r($errors);
      }
   }
   
   
$ProdutosDTO = new ProdutosDTO();
$ProdutosDTO->setNome($Nome);
$ProdutosDTO->setPreco($Preco);
$ProdutosDTO->setIMG($file_name);
$ProdutosDTO->setID_Produto($ID_Produto);


$ProdutosDAO = new ProdutosDAO();
$ProdutosDAO->updateprodutoById($ProdutosDTO);

echo "<script>";
echo "window.location.href = '../view/listarallProdutos.php';";
echo "</script> ";

?>