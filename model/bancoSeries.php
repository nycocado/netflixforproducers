<?php
    function inserirSeries($conexao,$codProFK,$nomeSer,$generoSer,$episodiosSer,$temporadasSer,$sinopseSer){
        $query="insert into tbseries(codProFK,nomeSer,generoSer,episodiosSer,temporadasSer,sinopseSer)values('{$codProFK}','{$nomeSer}','{$generoSer}','{$episodiosSer}','{$temporadasSer}','{$sinopseSer}')";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaSeries($conexao){
        $query="select * From tbseries";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaSeriesCod($conexao,$codSer){
        $query="select * from tbseries where codSer={$codSer}";
        $resultados=mysqli_query($conexao,$query);
        $resul=mysqli_fetch_array($resultados);
        return $resul;
    }
    function listaSeriesNome($conexao,$nomeSer){
        $query="select * from tbseries where nomeSer like '%{$nomeSer}%'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function alterarSeries($conexao,$codSer,$codProFK,$nomeSer,$generoSer,$episodiosSer,$temporadasSer,$sinopseSer){
        $query="update tbseries set codProFK='{$codProFK}', nomeSer='{$nomeSer}', generoSer='{$generoSer}', episodiosSer='{$episodiosSer}', temporadasSer='{$temporadasSer}', sinopseSer='{$sinopseSer}' where codSer='{$codSer}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarSeries($conexao,$codSer){
        $query="delete from tbseries where codSer=$codSer";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
?>