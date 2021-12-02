<?php
include_once("header.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="../controller/inserirProdutoras.php">
                <p>Nome <input type="text" name="nomePro"></p>
                <p>Fundador <input type="text" name="fundadorPro"></p>
                <p>Fundação <input type="date" name="fundacaoPro"></p>
                <p>Proprietario <input type="text" name="proprietarioPro"></p>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>