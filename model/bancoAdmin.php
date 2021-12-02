<?php
    function inserirAdmin($conexao,$nomeAdmin,$emailAdmin,$senhaAdmin){
        $option=['cost'=>8];
        $senhacrypto= password_hash($senhaAdmin,PASSWORD_BCRYPT,$option);
        $query="insert into tbadmin(nomeAdmin,emailAdmin,senhaAdmin)values('{$nomeAdmin}','{$emailAdmin}','{$senhacrypto}')";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaAdmin($conexao){
        $query="select * From tbadmin";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function alterarAdmin($conexao,$nomeAdmin,$emailAdmin,$senhaAdmin){
        $option=['cost'=>8];
        $senhacrypto= password_hash($senhaAdmin,PASSWORD_BCRYPT,$option);
        $query="update tbadmin set nomeAdmin='{$nomeAdmin}', emailAdmin='{$emailAdmin}' where senhaAdmin='{$$senhacrypto}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarAdmin($conexao,$codAdmin){
        $query="delete from tbadmin where codAdmin=$codAdmin";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
?>