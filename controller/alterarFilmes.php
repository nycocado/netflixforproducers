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
            if(alterarFilmes($conexao,$nomeFil,$generoFil,$duracaoFil,$diretorFil,$roteiristaFil,$sinopseFil)){
                echo("Filme alterado com sucesso.");
            }else{
                echo("Filme não alterado.");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>