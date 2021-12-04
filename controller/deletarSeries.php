<?php
include("../model/conexao.php");
include("../model/bancoSeries.php");
include("../view/header.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <?php
            extract($_REQUEST,EXTR_OVERWRITE);
            if(deletarSeries($conexao,$codSerDeletar)){
                echo("Série deletada com sucesso.");
            }else{
                echo("Série não deletada.");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>