<?php
include("../model/conexao.php");
include("../model/bancoAdmin.php");
include("../view/header.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <?php
            extract($_REQUEST,EXTR_OVERWRITE);
            if(inserirAdmin($conexao,$nomeAdm,$emailAdm,$senhaAdm)){
                echo("Administrador cadastrado com sucesso.");
            }else{
                echo("<p>Administrador não foi cadastrado.</p>");
                echo("<a href='../view/cadastroAdmin.php' type='button' class='btn btn-dark'>Voltar</a>");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>