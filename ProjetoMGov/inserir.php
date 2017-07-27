<DOCTYPE html>
    <html>
    <?php
    include "assets/includes/head.php";
    ?>
    <body>
    <div class="ui left visible vertical inverted teal sidebar labeled icon menu">
        <a href="index.php" class="item">
            <i class="search icon"></i>
            Buscar cliente
        </a>
        <a href="inserir.php" class="active item">
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
            <h1 class=""ui header">Adicionar cliente</h1>
            <div class="ui horizontal divider"><i class="add user icon"></i></div>
            <div class="ui middle aligned center aligned grid">
                <div class="column colunaForm" style="max-width: 650px;">
                    <h2 class="ui header">
                        <div class="content">
                            Cadastre um cliente
                        </div>
                    </h2>
                    <form class="ui large form searchForm" method="POST" action="create.php">
                        <div class="ui stacked segment">
                            <div class="field">
                                <i class="write icon"></i>
                            </div>
                            <div class="field">
                                <div class="ui input">
                                    <input type="text" name="id" placeholder="ID" pattern="[0-9]+$" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui input">
                                    <input type="text" name="nome"  placeholder="Nome Completo" max="30" maxlength="100" pattern="^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui input">
                                    <input type="text" name="email" placeholder="E-mail" max="30" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui input">
                                    <input type="text" id="inputCPF" name="cpf" placeholder="CPF" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui input">
                                    <input type="text" id="inputCel" name="cel" placeholder="Celular" required>
                                </div>
                            </div>
                            <div class="field">
                                <button type="submit" name="cadastrar" class="ui teal button">Cadastrar</button>
                            </div>
                        </div>
                    </form>
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