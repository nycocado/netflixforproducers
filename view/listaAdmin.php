<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoAdmin.php");
?>
<div class="container">
<table class="table text-light">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $admin = listaAdmin($conexao);
        foreach($admin as $admins):
        ?>
        <tr>
            <th scope="row"><?=$admins['codAdm']?></th>
            <td><?=$admins['nomeAdm']?></td>
            <td><?=$admins['emailAdm']?></td>
            <td><?=$admins['senhaAdm']?></td>
            <td>
                <form action="../controller/deletarAdmin.php" method="POST">
                    <input type="hidden" name="codAdmDeletar" value="<?=$admins['codAdm']?>">
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
            <td>
                <form action="formAlterarAdmin.php" method="POST">
                    <input type="hidden" name="codAdmAlterar" value="<?=$admins['codAdm']?>">
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