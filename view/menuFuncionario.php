<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        
           <meta charset="UTF-8">
        <title>Funcionário</title>
     <!-- Última versão CSS compilada e minificada -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="..//js/java.js"></script>
<link rel="stylesheet" type="text/css" href="..//css/cadastro.css">
    </head>
    <body>
        
<!--        
        
  <div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <span class="navbar-toggler-icon leftmenutrigger"></span>
      <a class="navbar-brand" href="#">Funcionário</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
        
        
        
      
    

       


    


      
             

      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
             
           
         
          <li class="nav-item">     
  

            <a class="nav-link" href="#">Cliente</a>
          </li>
          
          

          
          <li class="nav-item">            

        
            <a class="nav-link" href="#">Produto</a>
          </li>
          
          
                    
           
                   <li class="nav-item"> 

            <a class="nav-link" href="#">Serviço
             
            </a>
          </li> 
             <li class="nav-item"> 
       
             

            <a class="nav-link" href="#"> Agendamento de Serviços
             
            </a>
          </li> 
                   <li class="nav-item">
                       <a class="nav-link" href="..//controller/logoffController.php">Sair
             
            </a>
          </li> 
          
        </ul>
        

       
      </div>
    </nav>
      
      
        
    
    
        
        
        
        
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="..//view/formCadastrarCliente.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Cadastrar Cliente</a>
        <tr>
             <th>ID</th>
            <th>Nome</th>
           <th class="text-center">CPF</th> 
            <th>CEP</th>
           <th class="date-center">Data de nascimento</th>
                 <th class="text-center">email</th>        
        </tr>
    </thead>
        
    
    
    <tr>
           
                <td></td>
                <td></td>
                <td>></td>
                <td></td>
                <td></td>
               <td></td>
              
                                                                <td>Parent Blogs</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
      
    </table>
        
          
      
 <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Cadastrar Produtos</a>
        <tr>
             <th>ID</th>
            <th>Nome</th>
             <th class="text-center">Preço</th>
            
                        <th class="text-center">Tipo</th> 
                        <form action="http://www.seu-dominio.com.br" method="post"> 
 
Informa seu Nome: <input type="text" name="texto"> 
 
<input type=image src="images/enter.gif" width="25" height="15"> 
 

        </tr>
    </thead>
        
    
    
    <tr>
           
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           
              
                                                                <td>Parent Blogs</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
       
    </table>
             
       
 <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Cadastrar Serviços</a>
        <tr>
             <th>ID</th>
            <th>Nome</th>
             <th class="text-center">Preço</th>
            
                        <th class="text-center">Tipo</th>
                        
                        <form action="http://www.seu-dominio.com.br" method="post"> 
 
Informa seu Nome: <input type="text" name="texto"> 
 
<input type=image src="images/enter.gif" width="25" height="15"> 
 

        </tr>
    </thead>
        
    
    
    <tr>
           
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
           
              
                                                                <td>Parent Blogs</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
      
    </table>
        
        
        
    </div>
</div>
    
        

    </div>
</div>
-->       
<?php 
    if(session_id() =="" ){
        session_start();

    }
?>
            <tr>
                <td>
                       <a href="../view/FormAlterarFuncionario.php?id=<?=$_SESSION["id"]?>"     
                       target="centro">Alterar perfil Funcionario</a>
                    <li class="nav-item">
                <a class="nav-link" href="../view/formCadastrarCliente.php"     
                       target="centro">Cadastrar Cliente</a>
                    </li>
                     <li class="nav-item">
                <a class="nav-link" href="../view/listarAllCliente.php"     
                       target="centro">Lista de Clientes</a>
          </li>
                        <a href="../view/FormCadastrarProdutos.php"        
                       target="centro">cadastrar produto</a>
                        <a href="../view/ListarAllProdutos.php"     
                       target="centro">Listar Produtos</a>
                        <a href="../view/FormCadastrarServico.php"     
                       target="centro">cadastrar Serviço</a>
                        <a href="../view/ListarAllServico.php"     
                       target="centro">Listar Serviço</a>
                       <a href="../view/ListarAllcompra.php"     
                       target="centro">listar compras</a>
                       <a href="../view/ListarAllagenda.php"     
                       target="centro">Listar Agendamentos</a>
                                    </td>
                    <td align="right" width="15%">
                     <?php
                    if (isset($_SESSION["usuario"])){
                        echo "Usuário logado : ", $_SESSION["usuario"];
                        echo "<br>";
                        echo "Perfil: ", $_SESSION["descricao"];
                    }
                    ?>
                    <br>
                    <a href="../controller/logoffController.php">sair</a>
                                    </td>
      
      
    </body>
    
</html>






