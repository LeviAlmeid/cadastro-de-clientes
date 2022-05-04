<?php
include_once '../includes/header.php';
?>

<div class="row">
    <h3 class="light center-align blue-text">Cadastro de Cliente</h3>
    <br>
    <form class="col s12 m6 push-m3" action="../php_actions/create.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input name="nome" id="first_name" type="text" class="validate">
          <label for="first_name">Nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" placeholder="nome@email.com" id="disabled" type="email" class="validate">
          <label for="disabled">Email:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="tel" placeholder="9999-9999"id="email" class="validate" type="number">
          <label for="email">Telefone</label>
        </div>
      </div>
        <div class="row">
            <div class="col s12 m2 push-m5">
                <button name="btn-cadastrar" type="submit" class="btn">Cadastrar</button>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m2 push-m5">
                <h6 class="center-align"><a href="index.php">Voltar</a></h6>
            </div>
        </div>
    </form>
  </div>
<?php
include_once '../includes/footer.php';
?>