<DOCTYPE html>
<html>
    <?php
        include "assets/includes/head.php";
    ?>
    <body>
    <div class="ui left visible vertical inverted teal sidebar labeled icon menu">
        <a href="buscar.php" class="active item">
            <i class="search icon"></i>
            Buscar cliente
        </a>
        <a href="inserir.php" class="item">
            <i class="add user icon"></i>
            Adicionar cliente
        </a>
    </div>
    <div class="container">
        <div class="pusher">
            <h1 class=""ui header">Buscar cliente</h1>
            <div class="ui horizontal divider"><i class="search icon"></i></div>
            <div class="ui middle aligned center aligned grid">
                <div class="column" style="max-width: 650px;">
                    <h2 class="ui header">
                        <div class="content">
                            Selecione um meio de busca
                        </div>
                    </h2>
                    <div class="ui large form searchForm">
                        <div class="ui stacked segment">
                            <div class="field">
                                <select name="metodos" class="ui fluid search dropdown" onchange="buscarMetodo()" id="busca">
                                    <option value="">Buscar</option>
                                    <option value="email">E-mail</option>
                                    <option value="cpf">CPF</option>
                                    <option value="cel">Celular</option>
                                </select>
                            </div>
                            <div class="field">
                                    <input type="hidden" id="inputEmail" placeholder="E-mail">
                                    <input type="hidden" id="inputCPF" placeholder="CPF">
                                    <input type="hidden" id="inputCel" placeholder="Celular">
                            </div>
                            <div class="field">
                                <button onclick="getDados()" id="searchButton" class="ui teal button disabled">
                                    <i class="search icon"></i>Buscar</button>
                            </div>
                            <div class="field" id="divDados"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "assets/includes/footer.php";
        include "assets/includes/modals.php";
        include "assets/includes/scripts.php";
    ?>
    </body>
</html>