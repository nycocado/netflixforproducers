<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoFilmes.php");
?>
<div class="container">
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
        $filmes = listaFilmes($conexao);
        foreach($filmes as $filme):
        ?>
        <tr>
            <th scope="row"><?=$filme['codFil']?></th>
            <td><?=$filme['nomeFil']?></td>
            <td><?=$filme['generoFil']?></td>
            <td><?=$filme['duracaoFil']?></td>
            <td>
                <form action="../controller/deletarFilmes.php" method="POST">
                    <input type="hidden" name="codFilDeletar" value="<?=$filme['codFil']?>">
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
            <td>
                <form action="formAlterarFilmes.php" method="POST">
                    <input type="hidden" name="codFilAlterar" value="<?=$filme['codFil']?>">
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