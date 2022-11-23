<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginCadastro.css"/>
    <title>LOGIN</title>

</head>
<body>   
    <header>
        <a href="#" class="logo">FOOT STOCK</a>
        <ul>
            <li><a href="home.php" >Home</a></li>
            <li><a href="login.php" class="active">login</a></li>
            <li><a href="ListarProdutos.php">Produtos</a></li>
            <li><a href="anunciar.php" >Anunciar</a></li>
            <li><a href="carrinho.php">🛒 Carrinho</a> </li>
            <li><a href="perfil.php">Meu Perfil</a></li>
            <li><a href="logout.php">Fazer Logoff</a></li>
        </ul>
    </header>
<section class="sectionlogin">
            <img src="https://i.imgur.com/C0yOBr6.png" class="estrelas">
            <img src="https://i.imgur.com/2w3aCoW.png" class="lua">
            <img src="https://i.imgur.com/PrfvWAD.png" class="montanhas_behind">
            <img src="https://i.imgur.com/j4eeRlt.png " class="montanhas_front">

<section class="area-login">  
    <div class="login">
       
        
        <form action="validaLogin.php" method="POST">
            <input type="text" name="email" placeholder="Seu E-mail" autofocus>
            <input type="password" name="senha" placeholder="Sua Senha">
            <input type="submit" value="entrar">
        </form>
        <p>Ainda não tem uma conta?<a href="cadastro.php">Criar conta</a></p>
    </div>
</section>    

</section>

</body>
</html>