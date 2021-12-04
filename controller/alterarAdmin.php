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
            if(alterarAdmin($conexao,$codAdm,$nomeAdm,$emailAdm,$senhaAdm)){
                echo("Administrador alterado com sucesso.");
            }else{
                echo("Administrador não alterado.");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>