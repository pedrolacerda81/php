<?php 
if(isset($_POST['submit-login'])) {
    session_start();
    require 'connection.php';
    $user_id = mysqli_real_escape_string($link,  $_POST['user_id_cont']);
    $password = mysqli_real_escape_string($link,  $_POST['senha_cont']);
    $hashedPwd = hash('sha512', $password);
    $query = mysqli_query($link, "SELECT * FROM tbl_cadastro "
                         ."WHERE (user_id_cont = '$user_id') "
                         ."AND (senha_cont = '$hashedPwd'); ");
    $result = mysqli_num_rows($query);
    if ($result == true) {
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $user_id;
        header('Location: index.php');
    } else {
        header('Location: login.php?erro=invalidcredentials');
    }
}
?>