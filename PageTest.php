<!doctype html>

<html>

<head>
		<title>Page Test </title>
		<?php include "head.php" ?>
	</head>
<body>
	<?php include "header.php";?>
	<h2>Test</h2>
	<?php include "ecriturebdd.php" ;
    include "fonctions.php";

    
    $phrase="Coucou !";
    echo $phrase.'<br/>';
    $pendu=transformation($phrase,"");
    echo $pendu.'<br/>';
    $pendu=transformation($phrase,"O");
    echo $pendu.'<br/>';
    $phrase="disney+";
    echo $phrase;
    $pendu=transformation($phrase,"");
    echo $pendu.'<br/>';
    $phrase="Je m'appelle Emilie";
    echo $phrase;
    $pendu=transformation($phrase,"");
    echo $pendu.'<br/>';

	

 include "footer.php";?>
</body>

</html>