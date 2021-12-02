<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoFilmes.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="../controller/alterarFilmes.php">
            <?php 
            $codFil=$_POST['codFilAlterar'];
            $filme=listaFilmesCod($conexao,$codFil);
            ?>
                <p>Código <input type="number" name="codFil" value="<?=$filme['codFil']?>" readonly></p>
                <p>Código da Produtora <input type="number" name="codProFK" value="<?=$filme['codProFK']?>"></p>
                <p>Nome <input type="text" name="nomeFil" value="<?=$filme['nomeFil']?>"></p>
                <p>Gênero(s) <input type= "text" name="generoFil" value="<?=$filme['generoFil']?>"></p>
                <p>Duração <input type="text" name="duracaoFil" value="<?=$filme['duracaoFil']?>"></p>
                <p>Diretor(es) <input type="text" name="diretorFil" value="<?=$filme['diretorFil']?>"></p>
                <p>Roteirista(s) <input type="text" name="roteiristaFil" value="<?=$filme['roteiristaFil']?>"></p>
                <p>Sinopse <input type="text" name="sinopseFil" value="<?=$filme['sinopseFil']?>"></p>
                <button type="submit" class="btn btn-dark">Salvar</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>