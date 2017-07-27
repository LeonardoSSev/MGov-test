<?php
    $con = new mysqli("localhost", "root", "", "projeto");

    if($con->connect_error){
        die("Falha de conexão com o banco: " . $con->connect_error);
    }

    if(isset($_GET['email'])){
        $resultado = $con->query("SELECT nome, email, cpf, celular FROM cliente WHERE email = '" . $_GET['email']."'");
    } else if(isset($_GET['cpf'])){
        $resultado = $con->query("SELECT nome, email, cpf, celular FROM cliente WHERE cpf = '" . $_GET['cpf']."'");
    } else if(isset($_GET['cel'])){
        $resultado = $con->query("SELECT nome, email, cpf, celular FROM cliente WHERE celular = '" . $_GET['cel']."'");
    }
    if($resultado->num_rows == 1){
        $dados = $resultado->fetch_assoc();
    } else if($resultado->num_rows < 1){
        echo "Cliente não encontrado";
    }
    echo json_encode($dados);
    $con->close();

?>