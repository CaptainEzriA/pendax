<?php
	include "fonctions.php";
	require "lecturebdd.php";
	require "ecriturebdd.php";
	if(!empty($_POST['login']) and !empty($_POST['mdp']) and !empty($_POST['mdpconf']))
	{
		$login = escape($_POST['login']);
		$mdp = escape($_POST['mdp']);
		$mdpconf = escape($_POST['mdpconf']);

		if($mdp==$mdpconf)
		{
			creationCompte($login,md5($mdp));//ok écriture dans bdd
			header("location:Connexion.php");
		}

		else
		{
			header("location:CreerCompte.php");
		}
	}
?>

<!doctype html>

<html>

<head>
		<meta charset="utf-8"/> <!-- permet d'éliminer les soucis d'accents -->
		<title>Créer compte </title>
		<link rel="stylesheet" href="style.css"/>
	</head>
<body>
    <?php include "header.php" ?>
	<p><a href="index.php"><img src="icone.png" alt="Icone Pendax"/></a></p>
<h2>Créer un compte</h2>
<form method="POST" action="CreerCompte.php">
    <fieldset>
	<label for="login">Votre login : </label>
	<input type="text" name="login" required/><br/><br/>

	<label for="mdp">Votre mdp : </label>
    <input type="password" name="mdp" required/><br/><br/>
    
    <label for="mdpconf">Confirmer mdp : </label>
    <input type="password" name="mdpconf" required/><br/><br/>

	<input type="submit" value="Confirmer"/></fieldset>
</form>
<a href="index.php">Revenir à l'écran principal</a>
</body>

</html>