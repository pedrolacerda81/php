<?php
require 'top.php';

if(isset($_POST['submit'])) {
    require 'connection.php';
    $nome = mysqli_real_escape_string($link, $_POST['nome_cont']);
    $email = mysqli_real_escape_string($link, $_POST['email_cont']);
    $user_id = mysqli_real_escape_string($link,  $_POST['user_id_cont']);
    $password = mysqli_real_escape_string($link,  $_POST['senha_cont']);

    // Tratamento de Erros
            // Verivicar se usuario esta disponivel
            $sql = "SELECT * FROM tbl_cadastro WHERE user_id_cont = '$user_id'";
            $result = mysqli_query($link, $sql);
            $result = mysqli_query($link, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {
                header("Location: form.php?singup=usertaken");
                exit();
            } else {
                // Hashing a senha
                $hashedPwd = hash('sha512', $password);
                // Inserindo os dados no banco de dados
                $query = "INSERT INTO tbl_cadastro(
                    id_cont, 
                    nome_cont,
                    email_cont,
                    user_id_cont,
                    senha_cont)
                VALUES (
                     DEFAULT,
                     '$nome',
                     '$email',
                     '$user_id',
                     '$hashedPwd'
                     );";
                $cadastro = mysqli_query($link, $query);
                echo "<section class='edit'>";
                if($cadastro == true) {
                   echo "<p class='resultado'>Parabéns, cadastro realizado com Sucesso!</p>";
                   echo "<a href='users.php'>Voltar</a>";
                } else {
                    echo "<p class='resultado'>Opa, erro ao Cadastrar!</p>";
                    echo "<a href='users.php'>Voltar</a>";
                }
                require 'bottom.php';
            }
    } else {
    header("Location: form.php");
    exit();
}