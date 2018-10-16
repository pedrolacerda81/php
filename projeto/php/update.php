<?php 
require 'top.php';
require 'connection.php';

$id = $_GET['id'];

$query = "SELECT * FROM tbl_cadastro WHERE id_cont = '$id';";

$execute = mysqli_query($link, $query);

$result = mysqli_fetch_assoc($execute);
?>
<section class='edit'>
<h3>Editar Cadastro</h3>
   <form action="alter.php" method="post">
        <input type="hidden" name="id_up" value="<?php echo $result['id_cont'];?>">
        <p>Código do Contato: <?php echo"$id";?></p>
        <label for="name_cont">Nome:</label><input id="name_cont" type="text" value="<?php echo $result['nome_cont'];?>" name="nome_up" required>
        <label for="email_cont">Email:</label><input id="email_cont" type="email" value="<?php echo $result['email_cont'];?>" name="email_up" required>
        <label for="user_id_cont">Usuário:</label><input id="user_id_cont" type="text" value="<?php echo $result['user_id_cont'];?>" name="user_id_up" required>
        <input type="submit" name="submit" value="Alterar">
        <input type="reset" value="Limpar">
    </form>
<?php require 'bottom.php'; ?>