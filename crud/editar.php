<?php
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: logar.php');
    }
include_once("conexao.php");
extract($_GET);
$result_usuario = "SELECT * FROM produtos WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD - Editar</title>        
    </head>
    <body>
        <form method="POST" action="update.php">
            
            <label>Nome: </label>
            <input type="text" name="nome" value="<?php echo $row_usuario['nome']; ?>"><br><br>
            
            <label>Valor: </label>
            <input type="text" name = "valor" value="<?php echo $row_usuario['valor']; ?>"><br><br>
            
            <label>Imagem: </label>
            <input type="text" name = "imagem" value="<?php echo $row_usuario['imagem']; ?>"><br><br>

            <input type="hidden" name="id" value="<?=$row_usuario['id'];?>">
            
            <input type="submit" value="Editar">
        </form>
    </body>
</html>