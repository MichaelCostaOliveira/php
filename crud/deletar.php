<?php
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }
    include_once("conexao.php");
    extract($_GET);
    $deletar = "delete from produtos where id=$id";
    $del = mysqli_query($conn, $deletar);
    header("location: produtos.php");
    echo "$id";
?>