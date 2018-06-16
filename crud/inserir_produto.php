
<?php
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }
    include_once("conexao.php");
    
   extract($_POST);


	 $imgBanco = $_FILES['imagem']['name'];
    $caminhoPasta = "C:\\xampp\\htdocs\\CRUD\\crud\\imagen\\".$_FILES['imagem']['name'];
   	

  
	 $i = move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoPasta );

if($i == 1){



 $inserir_produto = "INSERT INTO produtos(nome, valor, imagem) VALUES ('".$produto. "', '".$valor."','".$imgBanco."')";
 $insert = mysqli_query($conn, $inserir_produto);
  header("location: produtos.php");
}
?>













///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }
    include_once("conexao.php");
    
	$imgBanco = $_FILES['imagem']['name'];
    $caminhoPasta = "C:\\xampp\\htdocs\\CRUD\\crud\\imagen\\".$_FILES['imagem']['name'];
   	

  

	
    $inserir_produto = "INSERT INTO produtos (nome, valor, imagem) VALUES ('$produto', '$valor', '$imgBanco')";
    $insert = mysqli_query($conn, $inserir_produto);
    header("location: produtos.php");
    /*$inserir_produto = "INSERT INTO produtos (nome, valor, imagem) VALUES ('$produto', '$valor', '$imagem')";
    $insert = mysqli_query($conn, $inserir_produto);
    header("location: produtos.php");*/

//upload_max_filesize serve para ajustar o tamanho dos arquivos para upload


?>


