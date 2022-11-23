<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['id'])) {
        include("login.php");
    }

    $idProduto = $_GET['ID'];

    include("conexao.php");
    $sql = "SELECT * FROM Produto WHERE ID = $idProduto";
    $res = $con-> query($sql) or die("Falha na execução do código SQL:" . mysqli->error);
    $quantidade = $res->num_rows;
    
    $carrinho = $res->fetch_assoc();

    $nome = $carrinho['Nome'];
    $preco = $carrinho['Preco'];
    $foto = $carrinho['Foto'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>SEU CARRINHO</title>
</head>
<body>
    <header>
        <a href="#" class="logo">FOOT STOCK</a>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="ListarProdutos.php">Produtos</a></li>
            <li><a href="anunciar.php" >Anunciar</a></li>
            <li><a href="carrinho.php" class="active">🛒 Carrinho</a> </li>
            <li><a href="perfil.php">Meu Perfil</a></li>
            <li><a href="logout.php">Fazer Logoff</a></li>
        </ul>
    </header>
        <section>
            <img src="https://i.imgur.com/C0yOBr6.png" class="estrelas">
            <img src="https://i.imgur.com/2w3aCoW.png" class="lua">
            <img src="https://i.imgur.com/PrfvWAD.png" class="montanhas_behind">
            <img src="https://i.imgur.com/j4eeRlt.png " class="montanhas_front">
        


        <div class="formCarrinho">
                <form method="post" action=""> 
            <center>        
                    <h1>Carrinho De Compras</h1> 
                    <label for="NomeProduto"><?php $nome ?></label>>
                      <br>
                    <label for="PrecoProduto2"><?php $preco ?></label>
                      <br>
                    <label for="CategoriaProduto2">Categoria: "Esportivo/Casual"</label>
                      <br>
                    <img src="<?php $foto?>">


                    <input type="submit" value="Continuar"/> 
            </center> 
                </form>
        </div>
        </section>
</body>
</html>


