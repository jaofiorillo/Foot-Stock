<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['id'])) {
        include("login.php");
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="loginCadastro.css"/>
    <title>Document</title>
</head>

<body>
    <header>
        <a href="#" class="logo">FOOT STOCK</a>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="login.php"  class="active">login</a></li>
            <li><a href="ListarProdutos.php">Produtos</a></li>
            <li><a href="anunciar.php" >Anunciar</a></li>
            <li><a href="carrinho.php">🛒 Carrinho</a> </li>
            <li><a href="perfil.php" >Meu Perfil</a></li>
            <li><a href="logout.php">Fazer Logoff</a></li>
        </ul>
    </header>

    <section class="area-login">
        <img src="https://i.imgur.com/C0yOBr6.png" class="estrelas">
        <img src="https://i.imgur.com/2w3aCoW.png" class="lua">
        <img src="https://i.imgur.com/PrfvWAD.png" class="montanhas_behind">
        <img src="https://i.imgur.com/j4eeRlt.png " class="montanhas_front">

        <div class="login">
            <form method="post" action="edicaoCadastro.php">
            <center> 

            <div class="perfil">
            <h1>Meu Perfil</h1>
               <hr>
               NOME:      <label for="cars"><?php echo $_SESSION['nome']?></label> 
               <hr> 
               E-MAIL:    <label for="cars"><?php echo $_SESSION['email']?></label> 
               <hr>  

               <input class=""EditarPerfil type="submit" value="Editar Perfil"/> 
            </div>

            </center>   
            </form>
        </div>
    </section>
</body>
</html>