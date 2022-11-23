<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginCadastro.css"/>
    <title>CADASTRO</title>
</head>
<body>
    <header>
        <a href="#" class="logo">FOOT STOCK</a>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="login.php" >login</a></li>
            <li><a href="ListarProdutos.php">Produtos</a></li>
            <li><a href="anunciar.php" >Anunciar</a></li>
            <li><a href="carrinho.php">🛒 Carrinho</a> </li>
            <li><a href="perfil.php" class="active">Meu Perfil</a></li>
            <li><a href="logout.php">Fazer Logoff</a></li>
        </ul>
    </header>
    
    <section class="area-cadastro">  
        
        <div class="cadastro">
    
            <form action="edicao.php" method="POST">
                <input type="text" name="email" placeholder="*E-mail"  required> <br>
                <input type="password" name="senhaAntiga" placeholder="*senha antiga"  required> <br>
                <input type="password" name="senhaNova" placeholder="*senha (Mínimo 6 caracteres)"  required> <br>
                <input type="password" name="senhaNova1" placeholder="*repita a senha"  required> <br>
                    <p></p>
                <input type="submit" value="Cadastrar">   
            </form>           
        </div>
        <section class="bagulhos">      
            <img src="https://i.imgur.com/C0yOBr6.png" class="estrelas">
            <img src="https://i.imgur.com/2w3aCoW.png" class="lua">
            <img src="https://i.imgur.com/PrfvWAD.png" class="montanhas_behind">
            <img src="https://i.imgur.com/j4eeRlt.png" class="montanhas_front">
            
        </section>
</section>  

</body>
</html>