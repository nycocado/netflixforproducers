<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoProdutoras.php");
?>
<div class="container">
<table class="table text-light">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Fundador</th>
            <th scope="col">Fundação</th>
            <th scope="col">Proprietario</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $produtoras = listaProdutoras($conexao);
        foreach($produtoras as $produtora):
        ?>
        <tr>
            <th scope="row"><?=$produtora['codPro']?></th>
            <td><?=$produtora['nomePro']?></td>
            <td><?=$produtora['fundadorPro']?></td>
            <td><?=$produtora['fundacaoPro']?></td>
            <td><?=$produtora['proprietarioPro']?></td>
            <td>
                <form action="../controller/deletarProdutoras.php" method="POST">
                    <input type="hidden" name="codProDeletar" value="<?=$produtora['codPro']?>">
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
            <td>
                <form action="formAlterarProdutoras.php" method="POST">
                    <input type="hidden" name="codProAlterar" value="<?=$produtora['codPro']?>">
                    <button type="submit" class="btn btn-success">Alterar</button>
                </form>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
</div>
<?php
include_once("footer.php");
?>