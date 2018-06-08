<?php
session_start();
include_once("conexao.php");

extract($_POST);

$select= "SELECT * FROM crud_inserir WHERE nome = '$nome' AND email ='$email'";
$resultado_select = mysqli_query($conn, $select);
$retorn= mysqli_num_rows($resultado_select);


if(strlen($nome)>0 && strlen($email)>0 && strlen($senha)>0 && $retorn==0){
	$result_usuario = "INSERT INTO crud_inserir (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
		$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
	header("Location: inserir.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Preencha todos os campos!</p>";
	header("Location: inserir.php");
}






/*<?php
session_start();
include_once("conexao.php");

extract($_POST);
//$resulta1= "SELECT crud_inserir (nome, email)";
//$resultado1_usuario = mysqli_query($conn, $resultA1_usuario);
//$retorn= mysqli_facht_array($resultado1_usuario)

if(strlen($nome)>0 && strlen($email)>0 && strlen($senha)>0 /*&& $retorn=0*/){
	/*$result_usuario = "INSERT INTO crud_inserir (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
		$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
	header("Location: inserir.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Preencha todos os campos!</p>";
	header("Location: inserir.php");
}
*/
