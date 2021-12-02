<?php
include_once("header.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="../controller/inserirSeries.php">
                <p>Código da Produtora <input type="number" name="codProFK"></p>
                <p>Nome <input type="text" name="nomeSer"></p>
                <p>Gênero(s) <input type="text" name="generoSer"></p>
                <p>Episódios <input type="number" name="episodiosSer"></p>
                <p>Temporadas <input type="number" name="temporadasSer"></p>
                <p>Sinopse <input type="text" name="sinopseSer"></p>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>