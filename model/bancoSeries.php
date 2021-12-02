<?php
    function inserirSeries($conexao,$nomeSer,$generoSer,$episodiosSer,$temporadasSer,$sinopseSer){
        $query="insert into tbseries(nomeSer,generoSer,episodiosSer,temporadasSer,sinopseSer)values('{$nomeSer}','{$generoSer}','{$episodiosSer}','{$temporadasSer}','{$sinopseSer}')";
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
    function alterarSeries($conexao,$nomeSer,$generoSer,$episodiosSer,$temporadasSer,$sinopseSer){
        $query="update tbseries set nomeSer='{$nomeSer}', generoSer='{$generoSer}', episodiosSer='{$episodiosSer}', temporadasSer='{$temporadasSer}' where sinopseSer='{$sinopseSer}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarSeries($conexao,$codSer){
        $query="delete from tbseries where codSer=$codSer";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
?>