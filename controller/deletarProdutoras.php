<?php
include("../model/conexao.php");
include("../model/bancoProdutoras.php");
include("../view/header.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <?php
            extract($_REQUEST,EXTR_OVERWRITE);
            if(deletarProdutoras($conexao,$codProDeletar)){
                echo("Produtora deletada com sucesso.");
            }else{
                echo("Produtora não deletada.");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>