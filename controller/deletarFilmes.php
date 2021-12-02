<?php
include("../model/conexao.php");
include("../model/bancoFilmes.php");
include("../view/header.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <?php
            extract($_REQUEST,EXTR_OVERWRITE);
            if(deletarFilmes($conexao,$codFilDeletar)){
                echo("Filme deletado com sucesso.");
            }else{
                echo("Filme não deletado.");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>