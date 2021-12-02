<?php
    function inserirFilmes($conexao,$nomeFil,$generoFil,$duracaoFil,$diretorFil,$roteiristaFil,$sinopseFil){
        $query="insert into tbfilmes(nomeFil,generoFil,duracaoFil,diretorFil,roteiristaFil,sinopseFil)values('{$nomeFil}','{$generoFil}','{$duracaoFil}','{$diretorFil}','{$roteiristaFil}','{$sinopseFil}')";
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
    function alterarFilmes($conexao,$nomeFil,$generoFil,$duracaoFil,$diretorFil,$roteiristaFil,$sinopseFil){
        $query="update tbfilmes set nomeFil='{$nomeFil}', generoFil='{$generoFil}', duracaoFil='{$duracaoFil}', diretorFil='{$diretorFil}', roteiristaFil='{$roteiristaFil}' where sinopseFil='{$sinopseFil}'";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
    function deletarFilmes($conexao,$codFil){
        $query="delete from tbfilmes where codFil=$codFil";
        $resultados=mysqli_query($conexao,$query);
        return $resultados;
    }
?>