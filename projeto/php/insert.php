<?php
include 'top.php';
include 'connection.php';

$nome = $_POST['nome_cont'];
$end = $_POST['address_cont'];
$tel = $_POST['phone_cont'];
$email = $_POST['email_cont'];

$query = "INSERT INTO tbl_cadastro(
    id_cont, 
    nome_cont,
    end_cont,
    tel_cont,
    email_cont)
VALUES (
     DEFAULT,
     '$nome',
     '$end',
     '$tel',
     '$email'
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
     include 'bottom.php';
     ?>