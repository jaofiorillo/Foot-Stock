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
    
    
?>