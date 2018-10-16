<?php require 'top.php' ?>
    <section>
        <h3>Formulário de Cadastro</h3>
        <hr>
        <form action="insert.php" method="post">
            <label for="name_cont">Nome:</label><input id="name_cont" type="text" name="nome_cont" required> 
            <label for="email_cont">Email:</label><input id="email_cont" type="email" name="email_cont" required>
            <label for="user_id_cont">Usuário:</label><input id="user_id_cont" type="text" name="user_id_cont" required>
            <label for="senha_cont">Senha:</label><input id="senha_cont" type="password" name="senha_cont" required>
            <input type="submit" name="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
<?php require 'bottom.php'?>