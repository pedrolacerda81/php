<?php require 'top.php' ?>
    <section>
        <h3>Login</h3>
        <hr>
        <form action="singin.php" method="post">
            <label for="user_id_cont">Usuário:</label><input id="user_id_cont" type="text" name="user_id_cont" required>
            <label for="senha_cont">Senha:</label><input id="senha_cont" type="password" name="senha_cont" required>
            <input type="submit" name="submit-login" value="Entrar">
        </form>
<?php require 'bottom.php'?>