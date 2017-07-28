<div class="ui modal" id="changeModal">
  <div class="header">
    Alterar
  </div>
  <div class="content container">
      <h3 class="ui dividing header">Alterar informações sobre o cliente</h3>
      <form method="POST" action="atualiza.php">
          <div class="ui middle aligned center aligned grid">
              <div class="column">
                  <div class="field">
                      <h3 class="ui header">Nome:</h3>
                      <div class="ui input">
                          <input class="prompt" type="hidden" id="inputIdEdit" name="inputIdEdit">
                        <input class="prompt" type="text" id="inputNomeEdit" disabled>
                      </div>
                  </div>
                  <div class="field">
                      <h3 class="ui header">CPF:</h3>
                      <div class="ui input">
                        <input class="prompt" type="text" id="inputCPFEdit" disabled>
                      </div>
                  </div>
                  <div class="field">
                      <h3 class="ui header">E-mail:</h3>
                      <div class="ui input">
                        <input class="prompt" type="text" id="inputEmailEdit" name="inputEmailEdit" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                      </div>
                  </div>
                  <div class="field">
                      <h3 class="ui header">Celular:</h3>
                      <div class="ui input">
                        <input class="prompt" type="text" id="inputCelularEdit" name="inputCelularEdit">
                      </div>
                  </div>
              </div>
          </div>
          <div class="field actions">
              <input class="ui teal button" type="submit" value="Alterar">
          </div>
      </form>
</div>

<div class="ui small modal" id="deleteModal">
    <div class="header">
        Excluir
    </div>
    <div class="content container">
        <h3 class="ui dividing header">Excluir cliente</h3>
        <div class="field">
            Deseja realmente excluir este cliente?
        </div>
    </div>
    <form class="actions" method="POST" action="remover.php">
        <input type="hidden" value="" name="id" id="inputID">
        <input type="submit" class="ui red button" value="Sim">
    </form>
    </div>
</div>

