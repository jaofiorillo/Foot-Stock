<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    include("conexao.php");
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $categoria = '1';
    $situacao = $_POST["situacao"];
    $cor = $_POST["cor"];
    $preco = $_POST["preco"];
    $tamanho = $_POST["tamanho"];
    $data_cadastro = $now = date_create('now')->format('Y-m-d');
    $fotoProduto = $_POST['foto'];
    $cliente =  $_SESSION['id'];

    $sql = "INSERT INTO Produto (Nome, Descricao, FK_Categoria, Situacao, Cor, Foto, Data_Cadastro, Preco, FK_Cliente_Solicitante)
     VALUES ('{$titulo}', '{$descricao}', '{$categoria}', '{$situacao}', '{$cor}', '{$fotoProduto}', '{$data_cadastro}', '{$preco}', '{$cliente}')";

    $res = $con-> query($sql);

    if($res == true) {
        echo  "<script>alert('Produto anunciado com Sucesso!');</script>";
        include('home.php');
    }
?>