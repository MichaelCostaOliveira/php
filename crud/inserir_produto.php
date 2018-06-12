<?php
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }
    include_once("conexao.php");
    
    extract($_POST);
	$caminho = "CRUD/crud/imagen/" . $imagem ;
	$imagem2 = $caminho;
	
    $inserir_produto = "INSERT INTO produtos (nome, valor, imagem) VALUES ('$produto', '$valor', '$imagem2')";
    $insert = mysqli_query($conn, $inserir_produto);
    header("location: produtos.php");
    /*$inserir_produto = "INSERT INTO produtos (nome, valor, imagem) VALUES ('$produto', '$valor', '$imagem')";
    $insert = mysqli_query($conn, $inserir_produto);
    header("location: produtos.php");*/
?>
