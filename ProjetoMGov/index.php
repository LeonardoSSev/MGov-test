<DOCTYPE html>
<html>
    <?php
        include "assets/includes/head.php";
    ?>
    <body>
    <div class="ui left visible vertical inverted teal sidebar labeled icon menu">
        <a href="index.php" class="active item">
            <i class="search icon"></i>
            Buscar cliente
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
            <div class="ui grid">
                <div class="sixteen wide mobile sixteen wide tablet eight wide computer column">
                    <div class="ui search searchForm">
                        <h3 class="ui header">Busque pelo CPF:</h3>
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

        </div>
    </div>
    <?php
        include "assets/includes/footer.php";
        include "assets/includes/scripts.php";
    ?>
    </body>
</html>