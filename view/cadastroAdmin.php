<?php
include_once("header.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="../controller/inserirAdmin.php">
                <p>Nome <input type="text" name="nomeAdmin"></p>
                <p>Email <input type="email" name="emailAdmin"></p>
                <p>Senha <input type="password" name="senhaAdmin"></p>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>