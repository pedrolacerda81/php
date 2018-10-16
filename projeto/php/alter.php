<?php
require 'top.php';

if(isset($_POST['submit'])) {
    require 'connection.php';
    $id = $_POST['id_up'];
    $nome = $_POST['nome_up'];
    $email = $_POST['email_up'];
    $user_id = $_POST['user_id_up'];

    // Tratamento de Erros
    // Verivicar se usuario esta disponivel
    $sql = "SELECT * FROM tbl_cadastro WHERE user_id_cont = '$user_id'";
    $result = mysqli_query($link, $sql);
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0 && $user_id != $row['user_id_cont']) {
        header("Location: update.php?singup=usertaken&id=$id");
        exit();
    } else {
        // Alterando os dados no banco de dados
        $query = "UPDATE tbl_cadastro "
                ."SET nome_cont = '$nome',"
                ."email_cont = '$email',"
                ."user_id_cont = '$user_id'"
                ."WHERE id_cont = '$id';";

                $update = mysqli_query($link, $query);
                echo "<section class='edit'>";
                if($update == true){
                echo "<p class='resultado'>Contato atualizado com sucesso!</p>";
                echo "<a href='users.php'>Voltar</a>";
                } else {
                echo "<p class='resultado'>Erro ao atualizar contatos!</p>";
                echo "<a href='users.php'>Voltar</a>";
                }
                require 'bottom.php';
            }
    } else {
    header("Location: update.php");
    exit();
}