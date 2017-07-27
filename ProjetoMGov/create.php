<?php
    require_once 'Classes/Cliente.php';
    if(isset($_POST['cadastrar'])) {
        $especiais = array("-", ".", "(", ")");
        $cpf = str_replace($especiais, "", $_POST['cpf']);
        $celular = str_replace($especiais, "", $_POST['cel']);

        $cliente = new Cliente($_POST['id'],
            $_POST['nome'],
            $_POST['email'],
            $cpf,
            $celular
        );
        $cliente->create();
        header("location: inserir.php");
    }

?>