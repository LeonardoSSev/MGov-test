<?php
    $con = mysqli_connect("localhost", "root", "", "projeto");
    $dados = mysqli_query($con, "SELECT nome, email, cpf, celular FROM cliente WHERE cpf = " . $_GET['cpf']);
    $linha =  mysqli_fetch_assoc($dados);
    echo json_encode($linha);
?>