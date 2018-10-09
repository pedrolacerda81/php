<?php include 'top.php' ?>
	<section class='index'>
		<h3>Bem Vindo(a) ao seu curso de PHP!</h3>
	<?php
		echo "<p class='resultado'>Hello, world!</p>"; 
		function soma($a, $b) {
			$soma = $a + $b;
			return $soma;
		}
		 $res= soma(3,5);
		 /* echo "<p class='resultado'>O resultado é $res.</p>";  */
	?>
<?php include 'bottom.php' ?>