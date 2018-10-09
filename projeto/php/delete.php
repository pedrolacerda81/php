<?php
include 'top.php';
include 'connection.php';

$id = $_GET['id'];
$query = "DELETE FROM tbl_cadastro WHERE id_cont = '$id';";
$execute = mysqli_query($link, $query);
echo "<section>";
if($execute == true) {
    echo "<p class='resultado'>Contato apagado com Sucesso!</p>";
    echo "<a href='users.php'>Voltar</a>";
} else {
    echo "<p class='resultado'>Erro ao apagar o contato.</p>";
    echo "<a href='users.php'>Voltar</a>";
}
include 'bottom.php';
?>