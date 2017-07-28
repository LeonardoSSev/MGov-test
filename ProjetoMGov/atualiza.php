<?php
    require_once 'Classes/Cliente.php';

    //retirando caracteres especiais para que seja enviado somente numeros ao banco
    $especiais = array("-", "(", ")");
    $celular = str_replace($especiais, "", $_POST['inputCelularEdit']);

    //altera dados do cliente
    Cliente::update($_POST["inputIdEdit"], $_POST["inputEmailEdit"], $celular);

    //redireciona para a página de busca
    header("location: buscar.php");
?>