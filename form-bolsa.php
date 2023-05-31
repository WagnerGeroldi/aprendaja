<?php


    $para = "aprendajabolsas@gmail.com";
    $name = $_POST['nome'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $find = $_POST['find'];
    $mensagem = "Nome: $name<br>";
    $mensagem .= "Email: $phone<br>";
	$mensagem .= "Cidade: $city<br>";
    $mensagem .= "Estado: $state<br>";
    $mensagem .= "Como nos encontrou: $find<br>";
    $headers = 'From: '.$email."\r\n". 'Reply-To: '.$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($para, $mensagem, $headers)){
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else{
        echo "Aconteceu um erro, tente novamente mais tarde.";
    }

?>