<?php
    function inserirFilmes($conexao,$codProFK,$nomeFil,$generoFil,$duracaoFil,$diretorFil,$roteiristaFil,$sinopseFil){
        $query="insert into tbfilmes(codProFK,nomeFil,generoFil,duracaoFil,diretorFil,roteiristaFil,sinopseFil)values('{$codProFK}','{$nomeFil}','{$generoFil}','{$duracaoFil}','{$diretorFil}','{$roteiristaFil}','{$sinopseFil}')";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaFilmes($conexao){
        $query="select * From tbfilmes";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function listaFilmesCod($conexao,$codFil){
        $query="select * from tbfilmes where codFil={$codFil}";
        $resultados=mysqli_query($conexao,$query);
        $resul=mysqli_fetch_array($resultados);
        return $resul;
    }
    function listaFilmesNome($conexao,$nomeFil){
        $query="select * from tbfilmes where nomeFil like '%{$nomeFil}%'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function alterarFilmes($conexao,$codProFK,$nomeFil,$generoFil,$duracaoFil,$diretorFil,$roteiristaFil,$sinopseFil){
        $query="update tbfilmes set codProFK='{$codProFK}', nomeFil='{$nomeFil}', generoFil='{$generoFil}', duracaoFil='{$duracaoFil}', diretorFil='{$diretorFil}', roteiristaFil='{$roteiristaFil}' where sinopseFil='{$sinopseFil}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarFilmes($conexao,$codFil){
        $query="delete from tbfilmes where codFil=$codFil";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
?>