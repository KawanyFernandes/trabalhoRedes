<?php
/**
 * Created by PhpStorm.
 * User: kawany.fernandes
 * Date: 30/11/2018
 * Time: 14:00
 */

function selectPessoa($conexao, $pessoa, $senha){
    $query = "  select * 
                from pessoa
                where usuario='{$pessoa}' and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);

}


function selectLog($conexao, $idpessoa){
    $query = "  select * 
                from tag t 
                JOIN logtags lt on lt.tag = t.uid
                where t.usuariotag = $idpessoa";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}