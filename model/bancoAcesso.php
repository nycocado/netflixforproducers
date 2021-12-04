<?php
    function buscarAcesso($conexao,$emailAdm,$senhaAdm){
        $query="select * from tbadmin where emailAdm='{$emailAdm}'";
        $resultados=mysqli_query($conexao,$query);
        if(mysqli_num_rows($resultados)>0){
            $linha=mysqli_fetch_assoc($resultados);
            if(password_verify($senhaAdm,$linha["senhaAdm"])){
                $_SESSION["emailAdm"]=$linha["emailAdm"];
                $_SESSION["codAdm"]=$linha["codAdm"];
                return $linha["emailAdm"];
            }else{
                return "Senha não confere";
            }
        }else{
            return "Email não cadastrado";
        }
    }
    function sairSistema(){
        session_destroy();
        $_SESSION["msg"]="<div class='alert alert-danger' role='alert'>Sessão Expirada</div>";
        header("Location:../view/logar.php");
    }
?>