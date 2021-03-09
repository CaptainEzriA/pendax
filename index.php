<!doctype html>

<html>

	<head>
		<?php include "head.php";?>
		<title>Pendax </title>
	</head>

	
	<body>

		<?php include "header.php" ;?>

		<section style="text-align:center">
		<p><a href="index.php"><img src="icone.png" alt="Icone Pendax"/></a></p>
		<h1>Bienvenue sur pendax !</h1>
		<?php
		
		if(isset($_SESSION['login']))
		{

			$terminTot=comptageTot(1);
			$encoursTot=comptageTot(0);
			echo "Bonjour $login,<br/>";
			if($encours==0)
				echo "Tu n'as pas de pendu en cours actuellement, génères en un! coucou hibou<br/>";
			else
				echo"Tu as actuellement $encours pendus en cours <br/>";
			if($termine==0)
				echo"Tu n'as pas encore fait deviner de pendu<br/><br/>";
			else
				echo "Au total, tu as déjà fait deviner $termine pendus<br/><br/>";
			echo "En prenant en compte tous les utilisateurs, $terminTot pendus ont été devinés et $encoursTot sont en cours";
		}
		
		else
		{
			echo'<button class="buttonstyle"><a href="Connexion.php">Se connecter</a></button><br/><br/>
			<button class="buttonstyle"><a href="CreerCompte.php">Créer un compte</a></button>';
		}
	

		?>
		</section>

		<?php include "footer.php"?>
	</body>
</html>