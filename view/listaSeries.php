<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoSeries.php");
?>
<div class="container">
<table class="table text-light">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Gênero</th>
            <th scope="col">Episódios</th>
            <th scope="col">Temporadas</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $serie = listaSeries($conexao);
        foreach($serie as $series):
        ?>
        <tr>
            <th scope="row"><?=$series['codSer']?></th>
            <td><?=$series['nomeSer']?></td>
            <td><?=$series['generoSer']?></td>
            <td><?=$series['episodiosSer']?></td>
            <td><?=$series['temporadasSer']?></td>
            <td>
                <form action="../controller/deletarSeries.php" method="POST">
                    <input type="hidden" name="codSerDeletar" value="<?=$series['codSer']?>">
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
            <td>
                <form action="formAlterarSeries.php" method="POST">
                    <input type="hidden" name="codSerAlterar" value="<?=$series['codSer']?>">
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