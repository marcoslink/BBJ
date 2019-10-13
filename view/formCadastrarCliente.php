
 
  <form action="../controller/cadastrarClienteController.php" method="post">
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
                    <td>Data de nascimento:</td>
                    <td><input type="Data" name="DT_nascimento"/></td>
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
                 <tr>
                    <td>CEP:</td>
                    <td><input type="numbers" name="CP_residencia"/></td>
                </tr>  
                            <td>Perfil:</td>
                    <td>
                        <select name="id_perfil"> 
                            <option value="3"> Cliente</option>

                        </select>
                    </td>
                                
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
        <center>-->
            <?php 
                if (!empty($_GET["msg"])){
                    echo $_GET["msg"]; 
                }
            ?>
             </center>
    </body>
</html>




      
       
