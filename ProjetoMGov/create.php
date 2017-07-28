<?php
    require_once 'Classes/Cliente.php';

    //verifica botão de cadastro
    if(isset($_POST['cadastrar'])) {

        //retirando caracteres especiais para que seja enviado somente numeros ao banco
        $especiais = array("-", ".", "(", ")");
        $cpf = str_replace($especiais, "", $_POST['cpf']);
        $celular = str_replace($especiais, "", $_POST['cel']);

        //cria novo cliente com os dados fornecidos pelo usuário
        $cliente = new Cliente($_POST['id'], $_POST['nome'],$_POST['email'], $cpf, $celular);

        //adiciona cliente ao banco de dados
        $cliente->create();

        //redireciona para a página de adicionar cliente
        header("location: inserir.php");
    }

?>