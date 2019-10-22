<?php 
session_start();
require_once "configBD.php";

if(isset($_SESSION['nomeDoUsuario'])){
    //logado

}else{
    //se nao esiver logado , redirecionar para index
    header("location: index.php");
}