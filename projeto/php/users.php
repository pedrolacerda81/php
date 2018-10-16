<?php require 'top.php'; ?>
<section>
    <h3>Usuários</h3>
    <hr>
    <?php
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
					require 'select.php';
				} else {
                    echo "<p>Você deve se logar primeiro para ter acesso a está pagina.</p> <br>";
					echo "<a href='login.php'>Entrar</a>";
				}
			?>
<!-- 
    <div class="user-div">
    <p><strong>Usuários:</strong> Pedro Lacerda da Costa <br>
    <strong>Email:</strong> pedro@email.com</p>
    <hr>
    <div class='user-controls'>
        <a class='alter' href='#editar'>Editar</a>
        <a class='drop' href='#exluir'>Excluir</a>
    </div>
</div> 
-->
<?php require 'bottom.php'; ?>