<?php
    include("conexao.php");
    if(!isset($_SESSION)) {
        session_start();
    }

    $mudaEmail = $_POST['email'];
    $mudaSenha1 = $_POST['senhaNova'];
    $mudaSenha2 = $_POST['senhaNova1'];
    $id = $_SESSION['id'];


    if($mudaSenha1 != $mudaSenha2){
        echo  "<script>alert('senhas nao coincidem');</script>";
        include("edicaoCadastro.php");
    } else {
        $tamanhoAlfabeto = 256;
        $nCasas = 4;
        $fora = 32;
        $senhaCript = '';

        for($i = 0; $i <strlen($mudaSenha2); $i++) {
            $key = ord($mudaSenha2[$i]);
            $novoCaractere = $key + $nCasas;
            $novoCaractere = $novoCaractere % $tamanhoAlfabeto;
            if($novoCaractere >=0 && $novoCaractere < $fora) {
                $novoCaractere += $fora;
            }
                $senhaCript .= chr($novoCaractere);
            
        }
        $sql = "UPDATE Cliente SET Email = '{$mudaEmail}', Senha = '{$senhaCript}' WHERE Id = $id";
        $res = $con-> query($sql) or die("Falha na execução do código SQL:" . mysqli->error);
        echo  "<script>alert('Edição feita com sucesso');</script>";
        session_destroy();
        include("login.php");
    }
    
?>