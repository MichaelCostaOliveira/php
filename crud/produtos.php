<?php
session_start();
include_once("conexao.php");
    if(isset($nome)&& isset($senha)){
            
        }else{}
    if(!$_SESSION['logado']){
        header('location: logar.php');
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Produtos</title>
    </head>
    <body>
    	<?php
    		$consulta = "select * from produtos";
			$retorno = mysqli_query($conn,$consulta);
			echo "<table border='1'>";
				while($produto = mysqli_fetch_assoc($retorno)){
					echo"<tr>";
					echo "<td>". $produto['id']."</td>";
					
					echo  "<td>". $produto['nome']."</td>";
					
					echo  "<td>" . $produto['valor']."</td>";
					
					echo "<td><img width = '150' heigth= '100' src='imagen\\".$produto['imagem']."'></td>";
                    echo"<td><a href='editar.php?id=". $produto['id']."'>Editar</a></td>";
                    echo"<td><a href='deletar.php?id=". $produto['id']."'>Deletar</a></td>";
                    echo"</tr>";
				}
//MYSQLI_FECTH_ASSOC BUSCA USUARIO PELO ASOCIATIVO OU PELA CHAVE
    	?>
    	
    	
    </table>
        <h1>CADASTRE AQUI UM NOVO PRODUTO</h1>
        <form action="inserir_produto.php" method="post" enctype="multipart/form-data">
            Produto:<input type="text" name="produto" placeholder="Nome do produto"><br>
            Preço:<input type="text" name="valor" placeholder="Preço do produto "><br>
            Imagem:<input type="file" name="imagem"><br>
        <button>Cadastrar</button>
        </form>
    </body>
    </html>






















/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
session_start();
include_once("conexao.php");
    if(isset($nome)&& isset($senha)){
            
        }else{}
    if(!$_SESSION['logado']){
        header('location: logar.php');
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Produtos</title>
    </head>
    <body>
    	<?php

    		$consulta = "select * from produtos";
			$retorno = mysqli_query($conn,$consulta);
			echo "<table border='1'>";
				while($produto = mysqli_fetch_assoc($retorno)){
					echo"<tr>";
					echo "<td>'$produto[id]'</td>
							<td>'$produto[nome]'</td>
								<td>'$produto[valor]'</td>
									<td><img width = '150' heigth= '100' src='/$produto[imagem]'></td>";
                    echo"<td><a href='editar.php?id=$produto[id]'>Editar</a></td>";
                    echo"<td><a href='deletar.php?id=$produto[id]'>Deletar</a></td>";
                    echo"</tr>";
				}
//MYSQLI_FECTH_ASSOC BUSCA USUARIO PELO ASOCIATIVO OU PELA CHAVE
    	?>
    </table>
        <h1>CADASTRE AQUI UM NOVO PRODUTO</h1>
        <form action="inserir_produto.php" method="post">
            Produto:<input type="text" name="produto" placeholder="Nome do produto"><br>
            Preço:<input type="text" name="valor" placeholder="Preço do produto "><br>
            Imagem:<input type="file" name="imagem"><br>
        <button>Cadastrar</button>
        </form>
    </body>
    </html>
//////////////////////////////////////////////////////////////////
   
