<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoProdutoras.php");
?>
<div class="container">
<div class="container text-light m-5 p-5">
<form action="listaProdutorasNome.php" method="POST">
    <div class="row mb-3">
        <label for="inputNome" class="col-sm-2 col-form-label">Digite o Nome da Produtora: </label>
        <div class="col-sm-3">
            <input type="text" name="nomePro" class="form-control" id="inputNome" required>
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-light">Buscar</button>
        </div>
    </div>
</form>
</div>
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
        $nomePro = isset($_POST['nomePro'])?$_POST['nomePro']:"";
        if($nomePro!=""){
            $produtora = listaProdutorasNome($conexao,$nomePro);
            foreach($produtora as $produtoras):
        ?>
        <tr>
            <th scope="row"><?=$produtoras['codPro']?></th>
            <td><?=$produtoras['nomePro']?></td>
            <td><?=$produtoras['fundadorPro']?></td>
            <td><?=$produtoras['fundacaoPro']?></td>
            <td><?=$produtoras['proprietarioPro']?></td>
            <td>
                <form action="../controller/deletarProdutoras.php" method="POST">
                    <input type="hidden" name="codProDeletar" value="<?=$produtoras['codPro']?>">
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
            <td>
                <form action="formAlterarProdutoras.php" method="POST">
                    <input type="hidden" name="codProAlterar" value="<?=$produtoras['codPro']?>">
                    <button type="submit" class="btn btn-success">Alterar</button>
                </form>
            </td>
        </tr>
        <?php
        endforeach;
    }
        ?>
    </tbody>
    </table>
</div>
<?php
include_once("footer.php");
?>