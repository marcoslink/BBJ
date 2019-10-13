<!DOCTYPE html>


<html lang="es">
<head>
    <center>
	<title>Formulario de sesion</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="../css/login.css" rel="stylesheet">
</head>
<body>

 <div id="login">
        <h3 class="text-center text-white pt-5">BBr Junior</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="..//controller/loginController.php" method="post">
                         <center>   <h3 class="text-center text-info">Login</h3>
                            
  
                                <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Lembrar me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <a href="#"  onclick="document.forms[0].submit();" class="text-info">Entrar</a>
                            </div><br>
                            
                            <div id="register-link" class="text-left">
                                   <br>
                                <a href="..//view/formCadastrarCliente.php" class="text-info">Não sou cadastrado!</a>
                                 <br><a href="..//index.php" class="text-info">Voltar para a página inicial.</a>
                            </div></center>>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</center>


    <center>
       

    
        <?php
        if (!empty($_GET["msg"])) {
            echo "<div id='errorlogin'>", $_GET["msg"], "</div>";
        }
        ?>
    </center>

    
</body>
</html>
               
    

    