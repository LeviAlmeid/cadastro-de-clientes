<?php
include_once '../includes/header.php';
//banco
include_once '../php_actions/conexao.php';
//select
if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect,$_GET['id']);

    $sql = "SELECT * FROM usuario WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);
}

?>

<div class="row">
    <h3 class="light center-align blue-text">Editar Cliente</h3>
    <br>
    <form class="col s12 m6 push-m3" action="../php_actions/update.php" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input name="nome" id="nome" type="text" value="<?php echo $dados['nome'];?>">
          <label for="first_name">Nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" placeholder="nome@email.com" id="disabled" type="email" value="<?php echo $dados['email'];?>">
          <label for="disabled">Email:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="tel" placeholder="9999-9999"id="email" value="<?php echo $dados['telefone'];?>" type="number">
          <label for="email">Telefone</label>
        </div>
      </div>
        <div class="row">
            <div class="col s12 m2 push-m5">
                <button name="btn-cadastrar" type="submit" class="btn">editar</button>
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