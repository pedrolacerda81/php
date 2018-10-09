<?php
include 'connection.php';
include 'top.php';

$id = $_POST['id_up'];
$nome = $_POST['nome_up'];
$end = $_POST['address_up'];
$tel = $_POST['phone_up'];
$email = $_POST['email_up'];

$query = "UPDATE tbl_cadastro "
        ."SET nome_cont = '$nome',"
        ."end_cont = '$end',"
        ."tel_cont = '$tel',"
        ."email_cont = '$email'"
        ."WHERE id_cont = '$id';";

$result = mysqli_query($link, $query);
echo "<section class='edit'>";
if($result == true){
    echo "<p class='resultado'>Contato atualizado com sucesso!</p>";
    echo "<a href='users.php'>Voltar</a>";
}else{
    echo "<p class='resultado'>Erro ao atualizar contatos!</p>";
    echo "<a href='users.php'>Voltar</a>";
}
?>
<?php include 'bottom.php'?>