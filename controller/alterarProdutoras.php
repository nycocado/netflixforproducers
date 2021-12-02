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
            if(alterarProdutoras($conexao,$nomePro,$fundadorPro,$fundacaoPro,$proprietarioPro)){
                echo("Produtora alterada com sucesso.");
            }else{
                echo("Produtora não alterada.");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>