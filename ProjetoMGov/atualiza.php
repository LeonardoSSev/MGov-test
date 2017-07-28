<?php
    require_once 'Classes/Cliente.php';
    Cliente::update($_POST["inputIdEdit"], $_POST["inputEmailEdit"], $_POST["inputCelularEdit"]);
    header("location: index.php");
?>