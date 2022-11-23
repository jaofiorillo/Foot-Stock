<?php
    include ("./conexao.php");
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $cpf = $_POST['cpf'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_cadastro = $now = date_create('now')->format('Y-m-d');
    $situacao = 'A';
    $fk = '1';

    $pattern = '/[0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2}/';
    if(!preg_match($pattern, $cpf)){
        include('cadastro.php');
        die ("<script>alert('insira um cpf correto!');</script>");
    } else {
            $pattern = '/^[A-Za-z0-9.\-\_]{3,}+@[a-z0-9]{3,}+.(com|com.br|edu.br)$/';
            if(!preg_match($pattern,$email)){
                include('cadastro.php');
                die ("<script>alert('insira um email corretoo!');</script>");
         } else {
                    $pattern = '/^(?=.[A-Z])(?=.[!#@$%&])(?=.[0-9])(?=.[a-z]).{10,}$/';
                    if(!preg_match($pattern,$senha)){
                        include('cadastro.php');
                        die ("<script>alert('insira uma senha correta corretoo!');</script>");
                    }
                    else {  

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

                        $sql = " INSERT INTO Cliente (Nome, CPF, Email, Senha, Data_Cadastro, Situacao, FK_Endereco) 
                        VALUES ('{$nome}', '{$cpf}', '{$email}', '{$senhaCript}', '{$data_cadastro}', '{$situacao}', '{$fk}')";
                    
                       $res = $con-> query($sql);
                    
                       if($res == true) {
                           echo  "<script>alert('Cadastro enviado com Sucesso!');</script>";
                           include('login.php');
                       }
          }
        }
    }
?>