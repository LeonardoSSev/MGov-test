<?php

    //abre conexão com o banco
    $con = new mysqli("localhost", "root", "", "projeto");

    //verifica se não houve erro com a conexão ao banco
    if($con->connect_error){
        die("Falha de conexão com o banco: " . $con->connect_error);
    }

    //executa a query baseado no meio de busca selecionado pelo usuário
    if(isset($_GET['email'])){
        $resultado = $con->query("SELECT * FROM cliente WHERE email = '" . $_GET['email']."'");
    } else if(isset($_GET['cpf'])){
        $resultado = $con->query("SELECT * FROM cliente WHERE cpf = '" . $_GET['cpf']."'");
    } else if(isset($_GET['cel'])){
        $resultado = $con->query("SELECT * FROM cliente WHERE celular = '" . $_GET['cel']."'");
    }

    //verifica se o cliente foi encontrado no banco de dados
    if($resultado->num_rows == 1){
        $dados = $resultado->fetch_assoc();
    } else if($resultado->num_rows < 1){
        echo "Cliente não encontrado";
    }

    //devolve à requisição Ajax os dados do cliente em JSON
    echo json_encode($dados);


    //fecha conexão com o banco
    $con->close();

?>