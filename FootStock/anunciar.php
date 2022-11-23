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
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>ANUNCIE AQUI</title>
</head>

<body>
    <header>
        <a href="#" class="logo">FOOT STOCK</a>
        <ul>
        <li><a href="home.php">Home</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="ListarProdutos.php">Produtos</a></li>
            <li><a href="anunciar.php" class="active">Anunciar</a></li>
            <li><a href="carrinho.php">🛒 Carrinho</a> </li>
            <li><a href="perfil.php">Meu Perfil</a></li>
            <li><a href="logout.php">Fazer Logoff</a></li>
        </ul>
    </header>

    <section>
        <img src="https://i.imgur.com/C0yOBr6.png" class="estrelas">
        <img src="https://i.imgur.com/2w3aCoW.png" class="lua">
        <img src="https://i.imgur.com/PrfvWAD.png" class="montanhas_behind">
        <img src="https://i.imgur.com/j4eeRlt.png " class="montanhas_front">

           <div class="formAnuncios">
            <form action="validaAnuncio.php" method="POST">

            <center>
             <div>
                <h1>Anunciar</h1>
                <label for="cars">Titulo do anuncio:</label>
                <br>
                <input type="text" name="titulo"  required placeholder="Titulo">
                <br>
                <label for="cars">Descrição:</label>
                <br>
                <input type="text" name="descricao" placeholder="Descrição">
                <br>
                <label for="cars">Categoria</label>
                <br>
                <select name="categoria" id="cor">
                <?php
                        include("conexao.php");
                        $sql = "SELECT Nome FROM Categoria";
                        $res = $con-> query($sql);
                        while($row = $res-> fetch_object()) {
                            print "<option = '".$row-> ID."'>";
                            print $row-> Nome."</option>";
                        }
                    ?>
                </select>
                <br>
                <label for="cars">Cor</label>
                <br>
                <select name="cor" id="cor">
                    <option value="quentes">Quente</option>
                    <option value="fria">Fria</option>
                    <option value="Colorido">Colorido</option>
                </select>
                <br>
                <label for="cars">Situacao</label> 
                <br>
                <select name="situacao" id="cor">
                    <option value="quentes">Novo</option>
                    <option value="fria">Semi-novo</option>
                    <option value="Colorido">Usado</option>
                </select>
                <br> 
                <label for="cars">Tamanho</label>
                <br>
                <input class="teste" type="number" id="Tamanho" name="tamanho">
                <br>
                <label for="cars">Preço:</label>
                <br>
                <input type="number" name="preco" required placeholder="Preço">
                <br>
                <label for="cars">Envie a foto do seu tênis</label>
                <input class="teste"  type="text" id="foto" name="foto" accept="image/png, image/jpeg">
                <input type="submit" value="Anunciar" />
            </center>
             </div> 
            </form>   
        </div>
    </section>
</body>
</html>