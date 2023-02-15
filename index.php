<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar Leads</title>
</head>
<body>
    <h1>Cadastro leads</h1>
    <?php
        if(isset($_SESSION['msg'])){

            echo $_SESSION['msg'];   //Imprime o valor da variavel
            unset($_SESSION['msg']); // Exclui o valor da variavel

        }
    ?>
    <form method="POST" action="processa.php" ><!--Enviar os dados do formulario pelo metodo    POST para o arquivo processa.php  -->



        <label>Empresa</label>
        <input type="text" name="empresa" placeholder="Nome do seu negocio">

        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome completo"><br><br>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Digite seu email" >
       
        <label>Telefone:</label>
        <input type="text" name="telefone" placeholder="(99)99999-9999" class="form-control cel-sp-mask">
 

        <input name="SendCadCont" type="submit" value="Cadastrar" ><!--Botão para enviar formulario -->
    </form>
  
</body>
</html>