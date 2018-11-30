<?php
/**
 * Created by PhpStorm.
 * User: kawany.fernandes
 * Date: 30/11/2018
 * Time: 14:07
 */

include "connection.php";
include "dbFechadura.php";

$usuario = selectPessoa($conexao, $_POST['usuario'], $_POST['senha']);

//
if($usuario == null){
    header("Location:loginUser.php?login=0");
}else{
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location:logs.php");
}