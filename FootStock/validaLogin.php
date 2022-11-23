<?php
    include("conexao.php");
    if(!isset($_SESSION['login'])) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $tamanhoAlfabeto = 256;
                        $nCasas = 4;
                        $fora = 32;  
                        $senhaCript = '';

    for($i = 0; $i <strlen($senha); $i++) {
        $key = ord($senha[$i]);
        $novoCaractere = $key + $nCasas;
        $novoCaractere = $novoCaractere % $tamanhoAlfabeto;
        if($novoCaractere >=0 && $novoCaractere < $fora) {
            $novoCaractere += $fora;
        }
            $senhaCript .= chr($novoCaractere);
        
    }

    $sql = "SELECT * FROM Cliente WHERE Email= '$email' and Senha = '$senhaCript'";
    $res = $con-> query($sql) or die("Falha na execução do código SQL:" . mysqli->error);

    $quantidade = $res->num_rows;

    if($quantidade == 1) {

        $usuario = $res->fetch_assoc();
        if(!isset($_SESSION)) {
            session_start(); 
        }

        $_SESSION['login'] = true;
        $_SESSION['id'] = $usuario['ID'];
        $_SESSION['nome'] = $usuario['Nome'];
        $_SESSION['email'] = $usuario['Email'];

        header("Location: home.php");

    } else {
        echo  "<script>alert('Email ou senha incorretos!');</script>";
        include('login.php');
    }
}
?>