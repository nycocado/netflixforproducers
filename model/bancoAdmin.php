<?php
    function inserirAdmin($conexao,$nomeAdm,$emailAdm,$senhaAdm){
        $option=['cost'=>8];
        $senhacrypto= password_hash($senhaAdm,PASSWORD_BCRYPT,$option);
        $query="insert into tbadmin(nomeAdm,emailAdm,senhaAdm)values('{$nomeAdm}','{$emailAdm}','{$senhacrypto}')";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaAdmin($conexao){
        $query="select * From tbadmin";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function alterarAdmin($conexao,$nomeAdm,$emailAdm,$senhaAdm){
        $option=['cost'=>8];
        $senhacrypto= password_hash($senhaAdm,PASSWORD_BCRYPT,$option);
        $query="update tbadmin set nomeAdm='{$nomeAdm}', emailAdm='{$emailAdm}' where senhaAdm='{$senhacrypto}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarAdmin($conexao,$codAdm){
        $query="delete from tbadmin where codAdm=$codAdm";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
?>