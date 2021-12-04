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
            if(alterarSeries($conexao,$codSer,$codProFK,$nomeSer,$generoSer,$episodiosSer,$temporadasSer,$sinopseSer)){
                echo("Série alterada com sucesso.");
            }else{
                echo("Série não alterada.");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>