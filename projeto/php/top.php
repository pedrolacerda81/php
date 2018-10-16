<!DOCTYPE html>
<html>
	<head>
	<title>Curso PHP - Unic Barão</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="shortcut icon" href="../images/logo-ico.ico" type="image/x-icon"/>
	<script type="text/javascript" src="../js/functions.js"></script>
</head>
<body>
	<header class="cabecalho">
		<a href="index.php"class="logo"><div class="title"><h1>Curso de PHP</h1></div></a>
		<nav id="nav "class="menu">
			<ul id="menu">
				<li>
					<a href="index.php">Início</a>
				</li>
				<li>
					<a href="form.php">Cadastrar</a>
				</li>
				<li>
					<a href="users.php">Usuários</a>
				</li>
			</ul>
		</nav>
		<div class="auth">
			<span class="auth-span">Olá, <?php
				session_start();
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
					echo $_SESSION['user'];
				} else {
					echo "visitante";
				}
			?>
			!</span>
			<?php
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
					echo "<a href='logout.php'>Sair</a>";
				} else {
					echo "<a href='login.php'>Entrar</a>";
				}
			?>
		</div>
	</header>