<?php   
session_start();

include_once 'conexao.php';

//Ferifica se o usuario clicou no batão, clicou no botão acessa o IP e tenta cadastrar, caso contrario acessa o ELSE
$SendCadCont = filter_input(INPUT_POST, 'SendCadCont', FILTER_SANITIZE_STRING);

if($SendCadCont){


    //RECEBENDO DADOS DO FORMULARIO

    $empresa  = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
    $nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

    //INSERIR OS DADOS NO BANCO

   $result_msg_cont =  "INSERT INTO leads_campanha (empresa, nome, email, telefone) VALUES (:empresa, :nome, :email, :telefone)";

   $insert_msg_cont = $conn->prepare($result_msg_cont);

    //Tratamento sql injection
   $insert_msg_cont->bindParam(':empresa', $empresa );
   $insert_msg_cont->bindParam(':nome', $nome );
   $insert_msg_cont->bindParam(':email', $email );
   $insert_msg_cont->bindParam(':telefone', $telefone );

   if($insert_msg_cont->execute()){

         $_SESSION['msg'] = "<p style='color:green;'> Mensagem foi enviada com sucesso </p>";
        header("Location: index.php");

   } else {

         $_SESSION['msg'] = "<p style='color:red;'> Mensagem não foi enviada </p>";
         header("Location: index.php");
   }
   

}else{
    //Cria variavel msg global com o valor em texto
    $_SESSION['msg'] = "<p style='color:red;'> Mensagem não foi enviada </p>";
    header("Location: index.php");
}

?>