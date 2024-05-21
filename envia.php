<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "kauebatera.p@gmail.com";
    $assunto = "Propostas"

    $corpo = "nome: ".$nome."\n"."email: ".$email."\n"."telefone: ".$telefone;

    $cabeca = "from: kauebatera.p@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(
        mail($para, $assunto, $corpo, $cabeca)){
            echo("E-mail enviando com sucesso !");
        }
        else{
            echo("Houve um erro ao enviar o E-mail!");
        }



?>