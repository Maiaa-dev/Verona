<?php 
    include_once('../conexao.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];

        $sql = "SELECT * FROM newsletter WHERE email = '$email'";
        $resultado = mysqli_query($conexao,$sql); //armazena o resultado da consulta anterior
    
        if (mysqli_num_rows($resultado) > 0){
            echo '<script>alert("Esse usuário já fez a inscrição!");window.location.href = "index.php";</script>';
            exit;
        }
        else{
            $sql = "INSERT INTO newsletter (nome,sobrenome,email) VALUES ('$nome','$sobrenome','$email')";
            if (mysqli_query($conexao,$sql)){
                echo '<script>alert("Inscrição realizada com sucesso!");window.location.href = "index.php";</script>';
                exit;
            }   
            else{
                echo '<script>alert("Erro ao realizar inscrição!");window.location.href = "index.php";</script>';
                exit;
            }
        }

?>