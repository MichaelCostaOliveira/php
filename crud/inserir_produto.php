<?php
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }
    include_once("conexao.php");
    
    extract($_POST);

    $inserir_produto = "INSERT INTO produtos (nome, valor, imagem) VALUES ('$produto', '$valor', '$imagem')";
    $insert = mysqli_query($conn, $inserir_produto);
    header("location: produtos.php");
?>