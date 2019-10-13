<!DOCTYPE html>
<html>
    <head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="..//js/cadastro.js"></script>
<link rel="stylesheet" type="text/css" href="..//css/cadastro.css"> -->
        <title>Cadastro</title>
    </head>
    <body>
       
        <form class="form-horizontal" action="..//controller/cadastrarClienteController.php"><center>
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Cadastro </div>
    
    <div class="panel-body">
<div class="form-group">

<div class="form-group">   

<div class="col-md-4 control-label">
    <h1>Cadastro de Cliente</h1>
    
</div>
</div>
    
<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="cpf" name="CPF" placeholder="Apenas números" class="form-control input-md" required="" type="text" >
  </div>
  
  <label class="col-md-1 control-label" for="Nome"> Data de Nascimento<h11>*</h11></label>  
  <div class="col-md-2">
  <input  name="DT_nascimento" type="Date" maxlength="10" >
</div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
  <div class="col-md-2">
    <input id="cep" name="CP_residencia" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="9" pattern="[0-9]+$">
  </div>
 
</div>



<div class="control-group">
  <label class="control-label" for="textinput">Nome do Usuário*:</label>
  <div class="controls">
    <input id="textinput" name="Usuario" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>


                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br> 
                                <input type="text" name="Senha" id="password" class="form-control,input-xlarge" class="input-xlarge">
                            </div>
   </div>
 
 </div>
 
 


</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
    <a href="..//index.php" class="text-info">Voltar para a página inicial.</a>
  </div>
</div>

</div>
</div></center>


</fieldset>
</form>
