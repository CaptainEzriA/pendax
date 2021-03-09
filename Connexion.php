<?php 
	if(!empty($_POST['login']) and !empty($_POST['mdp']))
	{
		require "lecturebdd.php";
		$login=$_POST['login'];
		$mdp=$_POST['mdp'];
		if(connexion($login,md5($mdp)))
		{
			session_start();
			$_SESSION['login']=$login;
			header("location:index.php");
		}
		
		else
		{
			header("location:Connexion.php");
		}
		
	}
?>

<!doctype html>
<html>

<head>
		<meta charset="utf-8"/> <!-- permet d'éliminer les soucis d'accents -->
		<title>Connexion </title>
		<link rel="stylesheet" href="style.css"/>
	</head>
<body>
<?php include "header.php" ?>
<p><a href="index.php"><img src="icone.png" alt="Icone Pendax"/></a></p>
<h2>Connexion</h2>
<form method="POST" action="Connexion.php">
	<fieldset>
	<label for="login">Votre login</label>
	<input type="text" name="login" required/><br/><br/>

	<label for="mdp">Votre mdp</label>
	<input type="password" name="mdp" required/><br/><br/>

	<input type="submit" value="Valider"/>
</fieldset>

</form>
<a href="index.php">Revenir à l'écran principal</a>
</body>

</html>