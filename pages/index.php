<?php
//conexao
require_once '../php_actions/conexao.php';

//HEADER
include_once '../includes/header.php'; 
?>


<!--Tabela de Usuários-->
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light center-align">Clientes</h3>
        <table class="striped">
            <thead>
                <th>Nome:</th>
                <th>Email:</th>
                <th>Telefone:</th>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM usuario";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)){
                ?>
                <tr>
                    <td><?php echo $dados['nome'];?></td>
                    <td><?php echo $dados['email'];?></td>
                    <td><?php echo $dados['telefone'];?></td>
                    <td><a href="./editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></td>
                    <td><a data-target="modal1" class="btn-floating red "><i class="material-icons modal-trigger">delete</i></td>
                </tr>
                    <?php } //fecha whyle?> 
            </tbody>
        </table>
        <br>
        <a href="cadastrar.php" class="btn">Cadastrar cliente</a>     
    </div>
</div>



<?php
//FOOTER
include_once '../includes/footer.php';
?>
    


