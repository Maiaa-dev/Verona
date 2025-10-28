<?php 
    include_once('../conexao.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $dataNasc = $_POST['dataNasc'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['tel'];
    $senha  = $_POST['criesenha'];
    $confiSenha = $_POST['confisenha'];

    if ($senha != $confiSenha){
            echo '<div class="alert alert-danger" role="alert">As senhas não são iguais. Tente novamente.</div>';
            exit; //Misturei um pouquinho de JS com PHP, mas nesse caso, se as senhas forem incompatíveis, ele emite um alerta e não sai da página!
    }
    else{
        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        $resultado = mysqli_query($conexao,$sql); //armazena o resultado da consulta anterior
    
    if (mysqli_num_rows($resultado) > 0){
            echo "Esse usuário já foi cadastrado";
        }
        else{
            $senhaCripto = password_hash($senha,PASSWORD_DEFAULT); //criptografando a senha
            $sql = "INSERT INTO usuario (nome,sobrenome,email,senha_hash,cpf,telefone,data_nasc) VALUES ('$nome','$sobrenome','$email','$senhaCripto','$cpf','$telefone','$dataNasc')";
            if (mysqli_query($conexao,$sql)){
                header("Location: index.php");
                exit;
            }   
            else{
                echo "Erro ao cadastrar: " . mysqli_error($conexao);
            }
        }
    
    
    }
?>