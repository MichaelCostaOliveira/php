<?php
session_start();
include_once("conexao.php");
extract($_POST);
echo "Nome: $nome <br>";
echo "valor: $valor <br>";
echo "imagem: $imagem <br>";
echo "id : $id";

	$imgBanco = $_FILES['imagem']['name'];
    $caminhoPasta = "C:\\xampp\\htdocs\\CRUD\\crud\\imagen\\".$_FILES['imagem']['name'];

	$update = "UPDATE produtos SET nome = '$nome', valor = '$valor', imagem = '$imagem' where id='$id'";
	$resultado = mysqli_query($conn, $update);

if(mysqli_affected_rows($conn)){
    header("Location: produtos.php");
}else{
    header("Location: editar.php?id=$id");
}














/*<?php
session_start();
include_once("conexao.php");

extract($_POST);
echo "Nome: $nome <br>";
echo "valor: $valor <br>";
echo "imagem: $imagem <br>";
echo "id : $id";
$update = "UPDATE produtos SET nome = '$nome', valor = '$valor', imagem = '$imagem' where id='$id'";
$resultado = mysqli_query($conn, $update);

if(mysqli_affected_rows($conn)){
    header("Location: produtos.php");
}else{
    header("Location: editar.php?id=$id");
}*/
