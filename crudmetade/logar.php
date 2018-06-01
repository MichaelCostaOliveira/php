  <?php
session_start();
    if(isset($_COOKIE['lembrar'])){
        $nome = $_COOKIE['nome'];
        $senha = $_COOKIE['senha'];
        $lembrar = $_COOKIE['nome'];
    }else{
        settype($nome,'string');
        settype($senha,'string');
    }
/*BANCO DE DADOS
BD = LOGIN
TABELA USUARIOS (ID) (USUARIO) (SENHA)
TABELA PRODUTOS (ID) (DESCRICAO) (PRECO) (IMAGEM)
NO CAMPO IMGAEM COLOCA (imagem/) antes do nome da imgem e no inserir é só colocar imagem/nome.jpg*/ 
   
   ?>
    <?php
        if(isset($_SESSION['mssa'])){
            echo $_SESSION['mssa'];
            unset($_SESSION['mssa']);
        }
   ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="crud/autenticacao.php" method="post">
            lOGIN:<input type="text" name="nome" value="<?=$nome?>"></br>
            SENHA:<input type="password" name="senha" value="<?=$senha?>"></br>
            Lembrar senha:<input type="checkbox" name="lembrar" <?php echo(isset($lembrar))?("checked"):(null)?>><br>
            <button>LOGAR</butoon>
        </form>
    </body>
    </html>