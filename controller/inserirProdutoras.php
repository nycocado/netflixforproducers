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
            if(inserirProdutoras($conexao,$nomePro,$fundadorPro,$fundacaoPro,$proprietarioPro)){
                echo("Sua produtora foi enviada para analise com sucesso, retornaremos assim que analisada. ");
                echo(";)");
            }else{
                echo("<p>Sua produtora não foi cadastrada.</p>");
                echo("<a href='../view/cadastroProdutoras.php' type='button' class='btn btn-dark'>Voltar</a>");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>