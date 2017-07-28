<?php
    require_once 'Classes/Cliente.php';
    Cliente::delete($_POST["id"]);
    header("location:buscar.php");
?>