<div class="ui modal" id="changeModal">
  <div class="header">
    Alterar
  </div>
  <div class="content container">
      <h3 class="ui dividing header">Alterar informações sobre o cliente</h3>
      <div class="field">
        <!--conteudo-->
      </div>
  </div>
  <div class="actions">
    <button class="ui button close">
      Cancelar
    </button>
    <div class="ui teal button">
      Alterar
    </div>
  </div>
</div>

<div class="ui small modal" id="deleteModal">
    <div class="header">
        <i class="close icon"></i>
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
        <button class="ui button" href="index.php">Não</button>
        <input type="submit" class="ui red button" value="Sim">
    </form>
    </div>
</div>

