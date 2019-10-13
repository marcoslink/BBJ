<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
     <!--  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="..//js/cadastro.js"></script>
<link rel="stylesheet" type="text/css" href="..//css/cadastro.css">
    </head>
    <body>
      
        <form class="form-horizontal" action="../controller/cadastrarProdutosController.php" method="post" >
<fieldset>

-->
<legend>Cadastro de Produtos</legend>

<!--
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcodigo_produto_id">Cód. Produto : </label>  
  <div class="col-md-2">
  <input id="txtcodigo_produto_id" name="txtcodigo_produto_id" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="txtproduto">Produto : </label>  
  <div class="col-md-6">
  <input id="txtproduto" name="txtproduto" type="text" placeholder="Descrição do Produto" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="txtgrupo">Grupo : </label>
  <div class="col-md-4">
    <select id="txtgrupo" name="txtgrupo" class="form-control">
      <option value="1">Higiêne</option>
      <option value="2">Consumo</option>
      <option value="3">Limpesa</option>
      <option value="4">Material de Escritório</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="txtcodigo_unidade_id">Unidade : </label>
  <div class="col-md-4">
    <select id="txtcodigo_unidade_id" name="txtcodigo_unidade_id" class="form-control">
      <option value="UND">Unidade</option>
      <option value="CX">Caixa</option>
      <option value="PC">Pacote</option>
      <option value="FAR">Fardo</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="txtestoque_minimo">Estoque Mínimo : </label>  
  <div class="col-md-2">
  <input id="txtestoque_minimo" name="txtestoque_minimo" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="txtestoque_atual">Estoque Atual : </label>  
  <div class="col-md-2">
  <input id="txtestoque_atual" name="txtestoque_atual" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="btnsalvar"></label>
  <div class="col-md-8">
    <button id="btnsalvar" name="btnsalvar" class="btn btn-primary">Salvar</button>
    <button id="btncancelar" name="btncancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>
-->

<form action="../controller/cadastrarProdutosController.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="Nome" size="50"/></td>
                </tr>
                <tr>
                    <td>preço:</td>
                    <td><input type="numbers" name="Preco"/></td>
                </tr>                
                <tr>
                    <td>IMG:</td>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="IMG" id="IMG">                          
                <tr/>
            </table>
 
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>


                <?php 
                if (!empty($_GET["msg"])){
                    echo $_GET["msg"]; 
                }
            ?>

</form>
    </body>
</html>
