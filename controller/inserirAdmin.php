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
            if(inserirFilmes($conexao,$nomeFil,$generoFil,$duracaoFil,$diretorFil,$roteiristaFil,$sinopseFil)){
                echo("Seu filme foi enviado para analise com sucesso, retornaremos assim que analisado. ");
                echo(";)");
            }else{
                echo("<p>Seu filme não foi cadastrado.</p>");
                echo("<a href='../view/cadastroClientes.php' type='button' class='btn btn-dark'>Voltar</a>");
            }
            ?>
        </div>
    </div>
</div>
<?php
include("../view/footer.php");
?>