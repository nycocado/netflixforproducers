<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoFilmes.php");
?>
<div class="container">
<div class="container text-light m-5 p-5">
<form action="listaFilmesCod.php" method="POST">
    <div class="row mb-3">
        <label for="inputCod" class="col-sm-2 col-form-label">Digite o Código do Filme: </label>
        <div class="col-sm-3">
            <input type="number" name="codFil" class="form-control" id="inputCod" required>
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
            <th scope="col">Gênero</th>
            <th scope="col">Duração</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codFil = isset($_POST['codFil'])?$_POST['codFil']:"0";
        if($codFil>0){
            $filmes = listaFilmesCod($conexao,$codFil);
            if ($filmes) {
        ?>
        <tr>
            <th scope="row"><?=$filmes['codFil']?></th>
            <td><?=$filmes['nomeFil']?></td>
            <td><?=$filmes['generoFil']?></td>
            <td><?=$filmes['duracaoFil']?></td>
            <td>
                <form action="../controller/deletarFilmes.php" method="POST">
                    <input type="hidden" name="codFilDeletar" value="<?=$filmes['codFil']?>">
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
            <td>
                <form action="formAlterarFilmes.php" method="POST">
                    <input type="hidden" name="codFilAlterar" value="<?=$filmes['codFil']?>">
                    <button type="submit" class="btn btn-success">Alterar</button>
                </form>
            </td>
        </tr>
        <?php
        }
    }
        ?>
        
    </tbody>
    </table>
</div>
<?php
include_once("footer.php");
?>