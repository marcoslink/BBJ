<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!--
       
        <form action="../controller/cadastrarFuncionarioController.php" method="post">
           <div class="panel panel-primary">
    <div class="panel-heading">Cadastro </div>
    
    <div class="panel-body">
<div class="form-group">

<div class="form-group">   
<div class="col-md-4 control-label">
    <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
</div>
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
  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" >
  </div>
  
  <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
  <div class="col-md-2">
    <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="9" pattern="[0-9]+$">
  </div>
  <div class="col-md-2">
      <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
    </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Rua</span>
      <input id="rua" name="rua" class="form-control" placeholder="" required=""  type="text">
    </div>
    
  </div>
    <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Nº <h11>*</h11></span>
      <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
    </div>
    
  </div>
  
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">Bairro</span>
      <input id="bairro" name="bairro" class="form-control" placeholder="" required=""  type="text">
    </div>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Cidade</span>
      <input id="cidade" name="cidade" class="form-control" placeholder="" required=""type="text">
    </div>
    
  </div>
  
   <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Estado</span>
      <input id="estado" name="estado" class="form-control" placeholder="" required=""   type="text">
    </div>
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="textinput">Nome do Usuário*:</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>


                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="text" name="password" id="password" class="form-control" class="input-xlarge">
                            </div>
   </div>
 
 </div>
 
 


</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
      -->
      <form action="../controller/cadastrarFuncionarioController.php" method="post">
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="Usuario" size="50"/></td>
                </tr>
                <tr>
                    <td>senha:</td>
                    <td><input type="password" name="Senha"/></td>
                </tr>                
                <tr>
                    <td>Função:</td>
                    <td><input type="text" name="funcao"/></td>
                </tr>                                
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="Nome"/></td>
                </tr>  
                <tr>
                    <td>CPF:</td>
                    <td><input type="numbers" name="CPF"/></td>
                </tr> 
                <tr>
                    <td>email:</td>
                    <td><input type="email" name="email"/></td>
                </tr>  
                            <td>Perfil:</td>
                    <td>
                        <select name="id_perfil"> 
                            <option value="2"> Funcionario</option>

                        </select>
                    </td>
                                
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
        <center>
            <?php 
                if (!empty($_GET["msg"])){
                    echo $_GET["msg"]; 
                }
            ?>
        </center>
    </body>
</html>
