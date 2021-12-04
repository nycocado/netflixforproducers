<?php
session_start();
include_once("../model/bancoAcesso.php");
include_once("../model/conexao.php");
$emailAdm=$_POST["emailAdm"];
$senhaAdm=$_POST["senhaAdm"];

$acesso=buscarAcesso($conexao,$emailAdm,$senhaAdm);
if($emailAdm===$acesso){
    header("Location:../view/index.php");
}else{
    $_SESSION["msg"]="<div class='alert alert-danger' role='alert'>Os dados não conferem.. tente novamente.</div>";
    header("Location:../view/logar.php");
}
?>