<?php
session_start();
$email = isset($_SESSION["emailAdm"])?$_SESSION["emailAdm"]:null;
if($email != null){
    include("header.php");
}
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="../controller/inserirAdmin.php">
                <p>Nome <input type="text" name="nomeAdm"></p>
                <p>Email <input type="email" name="emailAdm"></p>
                <p>Senha <input type="password" name="senhaAdm"></p>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>