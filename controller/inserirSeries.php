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
            if(inserirSeries($conexao,$codProFK,$nomeSer,$generoSer,$episodiosSer,$temporadasSer,$sinopseSer)){
                echo("Sua série foi enviada para analise com sucesso, retornaremos assim que analisada. ");
                echo(";)");
            }else{
                echo("<p>Sua série não foi cadastrada.</p>");
                echo("<a href='../view/cadastroSeries.php' type='button' class='btn btn-dark'>Voltar</a>");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>