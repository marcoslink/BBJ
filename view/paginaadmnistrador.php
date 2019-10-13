<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BBr Junior</title>
   
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="..//js/java.js"></script>
<link rel="stylesheet" type="text/css" href="..//css/cadastro.css">
    </head>
    
         <body>





  <div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      
      <a class="navbar-brand" href="#">Administrador</a>
      
          

     
        <ul class="navbar-nav animate side-nav">
         
            
    
            <li class="nav-item">
            
              <a class="nav-link" href="../view/FormCadastrarProdutos.php"     
                       target="centro">Cadastrar produto</a>
          </li>
          <li class="nav-item">
              <a class="nav-link"  <a href="../view/ListarAllProdutos.php"     
                       target="centro">Lista de Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../view/FormCadastrarFuncionario.php"     
                       target="centro">Cadastrar funcionário</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="../view/formCadastrarCliente.php"     
                       target="centro">Cadastrar Cliente</a>
          </li>
  <li class="nav-item">
      <a class="nav-link" href="../view/listarAllCliente.php"     
                       target="centro">Lista de Funcionários</a>
          </li>

  <li class="nav-item">
            <a class="nav-link" href="../view/FormCadastrarServico.php"     
                       target="centro">Cadastrar Serviço</a>
          </li>
                   <li class="nav-item">
            <a class="nav-link" href="../view/ListarAllServico.php"     
                       target="centro">Lista de Serviços</a>
          </li> 
    <li class="nav-item">
            <a class="nav-link" href="../view/ListarAllcompra.php"     
                       target="centro">Lista de Compras</a>
          </li> 
    <li class="nav-item">
            <a class="nav-link" href="../view/ListarAllagenda.php"     
                       target="centro">Lista de Agendamento</a>
          </li> 
</li> 
    
<li class="nav-item">
               <a class="Nav-link" target="centro">
                    <?php
                    if (isset($_SESSION["usuario"])) {
                        echo "Usuário logado : ", $_SESSION["usuario"];
                        echo "<br>";
                        
                    }
                    ?>
                    <br>
               
               </a> </li>

                   <li class="nav-item">
                       <a class="nav-link" href="..//controller/logoffController.php">Sair</a>
                 </li> 
          
        </ul>
        

       </nav>  
 
   
   
    </div>
<div class="hi" id="wrapper">
    <center>
        <iframe src="../view/FormCadastrarProdutos.php" name="centro">
                
                      
            </iframe>
    </center>
</div>
    </body>
</html>





