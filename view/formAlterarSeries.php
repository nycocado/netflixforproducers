<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoSeries.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="../controller/alterarSeries.php">
            <?php 
            $codSer=$_POST['codSerAlterar'];
            $serie=listaSeriesCod($conexao,$codSer);
            ?>
                <p>Código <input type="number" name="codSer" value="<?=$serie['codSer']?>" readonly></p>
                <p>Código da Produtora <input type="number" name="codProFK" value="<?=$serie['codProFK']?>"></p>
                <p>Nome <input type="text" name="nomeSer" value="<?=$serie['nomeSer']?>"></p>
                <p>Gênero(s) <input type= "text" name="generoSer" value="<?=$serie['generoSer']?>"></p>
                <p>Episódios <input type="text" name="episodiosSer" value="<?=$serie['episodiosSer']?>"></p>
                <p>Temporadas <input type="text" name="temporadasSer" value="<?=$serie['temporadasSer']?>"></p>
                <p>Sinopse <input type="text" name="sinopseSer" value="<?=$serie['sinopseSer']?>"></p>
                <button type="submit" class="btn btn-dark">Salvar</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>