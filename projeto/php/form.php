<?php include 'top.php' ?>
    <section>
        <h3>Formulário de Cadastro</h3>
        <form action="insert.php" method="post">
            <label for="name_cont">Nome:</label><input id="name_cont" type="text" name="nome_cont" required> 
            <label for="address_cont">Endereço:</label><input id="address_cont" type="text" name="address_cont" required> 
            <label for="phone_cont">Telefone:</label><input id="phone_cont" type="tel" name="phone_cont" required>
            <label for="email_cont">Email:</label><input id="email_cont" type="email" name="email_cont" required> 
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
<?php include 'bottom.php'?>