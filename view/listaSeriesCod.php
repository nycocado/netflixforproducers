<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoSeries.php");
?>
<div class="container">
<div class="container text-light m-5 p-5">
<form action="listaSeriesCod.php" method="POST">
    <div class="row mb-3">
        <label for="inputCod" class="col-sm-2 col-form-label">Digite o Código da Série: </label>
        <div class="col-sm-3">
            <input type="number" name="codSer" class="form-control" id="inputCod" required>
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
            <th scope="col">Episódios</th>
            <th scope="col">Temporadas</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $codSer = isset($_POST['codSer'])?$_POST['codSer']:"0";
        if($codSer>0){
            $series = listaSeriesCod($conexao,$codSer);
            if ($series) {
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
        }
    }
        ?>
        
    </tbody>
    </table>
</div>
<?php
include_once("footer.php");
?>