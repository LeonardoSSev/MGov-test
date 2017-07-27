<?php
    $con = mysqli_connect("localhost", "root", "", "projeto");
    if(isset($_GET['cpf'])){
        $query = mysqli_query($con, "SELECT nome, email, cpf, celular FROM cliente WHERE cpf = " . $_GET['cpf']);
    } else if(isset($_GET['email'])){
        $query = mysqli_query($con, "SELECT nome, email, cpf, celular FROM cliente WHERE email = " . $_GET['email']);
    } else if(isset($_GET['cel'])){
        $query = mysqli_query($con, "SELECT nome, email, cpf, celular FROM cliente WHERE cel = " . $_GET['cel']);
    }

    $dados =  mysqli_fetch_assoc($query);
    echo json_encode($dados);
?>