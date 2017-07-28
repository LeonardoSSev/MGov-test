<?php
    require_once 'Classes/Cliente.php';
    $especiais = array("-", "(", ")");
    $celular = str_replace($especiais, "", $_POST['inputCelularEdit']);
    Cliente::update($_POST["inputIdEdit"], $_POST["inputEmailEdit"], $celular);
    header("location: index.php");
?>