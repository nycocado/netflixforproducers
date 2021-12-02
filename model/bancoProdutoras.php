<?php
    function inserirProdutoras($conexao,$nomePro,$fundadorPro,$fundacaoPro,$proprietarioPro){
        $query="insert into tbprodutoras(nomePro,fundadorPro,fundacaoPro,proprietarioPro)values('{$nomePro}','{$fundadorPro}','{$fundacaoPro}','{$proprietarioPro}')";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaProdutoras($conexao){
        $query="select * From tbprodutoras";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaProdutorasCod($conexao,$codPro){
        $query="select * from tbprodutoras where codPro={$codPro}";
        $resultados=mysqli_query($conexao,$query);
        $resul=mysqli_fetch_array($resultados);
        return $resul;
    }
    function listaProdutorasNome($conexao,$nomePro){
        $query="select * from tbprodutoras where nomePro like '%{$nomePro}%'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function alterarProdutoras($conexao,$nomePro,$fundadorPro,$fundacaoPro,$proprietarioPro){
        $query="update tbprodutoras set nomePro='{$nomePro}', fundadorPro='{$fundadorPro}', fundacaoPro='{$fundacaoPro}' where proprietarioPro='{$proprietarioPro}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarProdutoras($conexao,$codPro){
        $query="delete from tbprodutoras where codPro=$codPro";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
?>