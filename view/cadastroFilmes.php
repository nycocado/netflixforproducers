<?php
include_once("header.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="../controller/inserirFilmes.php">
                <p>Nome <input type="text" name="nomeFil"></p>
                <p>Gênero(s) <input type="text" name="generoFil"></p>
                <p>Duração <input type="text" name="duracaoFil"></p>
                <p>Diretor(es) <input type="text" name="diretorFil"></p>
                <p>Roteirista(s) <input type="text" name="roteiristaFil"></p>
                <p>Sinopse <input type="text" name="sinopseFil"></p>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>