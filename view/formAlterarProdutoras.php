<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoProdutoras.php");
?>
<div class="container3">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="../controller/alterarProdutoras.php">
            <?php 
            $codPro=$_POST['codProAlterar'];
            $produtora=listaProdutorasCod($conexao,$codPro);
            ?>
                <p>Código <input type="number" name="codPro" value="<?=$produtora['codPro']?>" readonly></p>
                <p>Nome <input type="text" name="nomePro" value="<?=$produtora['nomePro']?>"></p>
                <p>Fundador <input type= "text" name="fundadorPro" value="<?=$produtora['fundadorPro']?>"></p>
                <p>Fundação <input type="date" name="fundacaoPro" value="<?=$produtora['fundacaoPro']?>"></p>
                <p>Proprietario <input type="text" name="proprietarioPro" value="<?=$produtora['proprietarioPro']?>"></p>
                <button type="submit" class="btn btn-dark">Salvar</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>