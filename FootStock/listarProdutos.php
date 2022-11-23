<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Document</title>
    </head>
    <body>
        <header>
        <a href="#" class="logo">FOOT STOCK</a>

        <ul>
            <li><a href="home.php" >Home</a></li>
            <li><a href="login.php" >login</a></li>
            <li><a href="ListarProdutos.php" class="active">Produtos</a></li>
            <li><a href="anunciar.php" >Anunciar</a></li>
            <li><a href="carrinho.php">🛒 Carrinho</a> </li>
            <li><a href="perfil.php">Meu Perfil</a></li>
            <li><a href="logout.php">Fazer Logoff</a></li>
        </ul>

        </header>

<div class="Filtragem">
<section>
            <img src="https://i.imgur.com/C0yOBr6.png" class="estrelas">
            <img src="https://i.imgur.com/2w3aCoW.png" class="lua">
            <img src="https://i.imgur.com/PrfvWAD.png" class="montanhas_behind">
            <img src="https://i.imgur.com/j4eeRlt.png " class="montanhas_front">
       



        




            <div class="formProdutos">
                <form method="post" action=""> 
                    <center>
                    <h1>Produtos</h1> 


                    <label for="cars">Categoria:</label>
                    <select name="categoria" id="cars">
                        <option value="esportivo">Esportivo</option>
                        <option value="casual">Casual</option>
                    </select>


                    <label for="cars">Cor:</label>
                    <select name="cor" id="cor">
                        <option value="quentes">Quente</option>
                        <option value="fria">Fria</option>
                        <option value="Colorido">Colorido</option>
                    </select>

                    <label for="cars">Tamanho:</label>
                    <input type = "number" id="Tamanho" name="Tamanho">


                      <input type="submit" value="Filtrar"/> 
                      </center>
                </form>
            </div>
</section>      
</div>     
        <div class="container">
            <?php
                    include("conexao.php");
                    $sql = "SELECT * FROM Produto ORDER BY ID DESC";
                    $res = $con-> query($sql) or die("Falha na execução do código SQL:" . mysqli->error);
                    $quantidade = $res->num_rows;
            ?> 


<div class="InfoProduto">
<form action="validaVenda.php" method="POST" >
        
        <?php
                while($user_data = mysqli_fetch_assoc($res)) {
                    echo"<tr>";
                    echo"<img  class='imgUser' src=".$user_data['Foto']."/>";
                    echo"<br>";
                    echo"<h3> NOME:".$user_data['Nome']."</h3>";
                    echo"<br>";
                    echo"<h3> PREÇO:" .$user_data['Preco']."</h3>";
                    echo"<br>";
                    echo"<td>
                        <button class='btn btn-sm btn-primary' href='validaVenda.php?id=$user_data[ID] value:oiii'>
                        COMPRAR
                        </button>
                    </td>";
                }
            ?>

</center>            
        </div>    
            </div>
</section>


    </body>
</html>