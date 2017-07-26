<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="assets/img/mgov.png" type="image/x-icon"/>
        <link rel="stylesheet" href="assets/vendor/semantic-ui/semantic.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
        <title>Projeto MGov</title>
    </head>
    <body>
    <div class="ui left visible vertical inverted teal sidebar labeled icon menu">
        <a href="index.php" class="active item">
            <i class="search icon"></i>
            Procurar
        </a>
        <a href="#" class="item">
            <i class="add user icon"></i>
            Adicionar cliente
        </a>
        <a href="#" class="item">
            <i class="edit icon"></i>
            Alterar cliente
        </a>
        <a href="#" class="item">
            <i class="remove user icon"></i>
            Excluir cliente
        </a>
    </div>
    <div class="container">
        <div class="pusher">
            <h1 class=""ui header">Buscar cliente</h1>
            <div class="ui horizontal divider"><i class="search icon"></i></div>
            <div class="ui search searchForm">
                <h4 class="ui header">Busque pelo CPF:</h4>
                <div class="ui icon input">
                    <input class="fixed prompt" type="text" id="cpf" name="cpf" placeholder="Informe o CPF">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>
                <button onclick="getDados()" class="ui teal button">Buscar</button>
            </div>
            <div id="divDados"></div>
        </div>
    </div>
    <?php
        include "assets/includes/footer.php";
    ?>
    <script src="assets/vendor/jquery-3.2.1.min.js" type="text/javascript" language="javascript"></script>
    <script src="assets/vendor/semantic-ui/semantic.min.js" type="text/javascript" language="javascript"></script>
    <script src="assets/js/funcoes.js" type="text/javascript" language="javascript"></script>
    </body>
</html>