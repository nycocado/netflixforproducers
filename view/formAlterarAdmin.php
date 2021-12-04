<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoAdmin.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="../controller/alterarAdmin.php">
            <?php 
            $codAdm=$_POST['codAdmAlterar'];
            $admin=listaAdminCod($conexao,$codAdm);
            ?>
                <p>Código <input type="number" name="codAdm" value="<?=$admin['codAdm']?>" readonly></p>
                <p>Nome <input type="text" name="nomeAdm" value="<?=$admin['nomeAdm']?>"></p>
                <p>Email <input type= "text" name="emailAdm" value="<?=$admin['emailAdm']?>"></p>
                <p>Senha <input type="text" name="senhaAdm" value="<?=$admin['senhaAdm']?>"></p>
                <button type="submit" class="btn btn-dark">Salvar</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>