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
            if(deletarAdmin($conexao,$codAdmDeletar)){
                echo("Administrador deletado com sucesso.");
            }else{
                echo("Administrador não deletado.");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>