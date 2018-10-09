<?php 
include 'connection.php';
    $query = "SELECT * FROM tbl_cadastro;";
    $execute = mysqli_query($link, $query);

    while($result = mysqli_fetch_assoc($execute)) {
        echo "<div class='user-div'>";
        echo "<p><strong>Usuários:</strong> ".$result['nome_cont'];
        echo "<br>";
        echo "<strong>Email:</strong> ".$result['email_cont']."</p>";
        echo "<hr>";
        echo "<div class='user-controls'>";
        echo "<a class='alter' href=update.php?id=".$result['id_cont'].">Editar</a>";
        echo "<a class='drop' href=delete.php?id=".$result['id_cont'].">Excluir</a>";
        echo "</div>";
        echo "</div>";
    }
?>