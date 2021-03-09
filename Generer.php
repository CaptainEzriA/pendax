<!doctype html>

<html>

<head>
		<title>Générer pendu </title>
		<?php include "head.php" ?>
	</head>

<body>
	<?php include "header.php";?>
	<h2>Générer un nouveau pendu</h2>
	<?php include "menuSeries.php" ; ?>
	
	<div class="bloc" id="container2">
	<div class="demibloc2">
		
	<form>
		<textarea id="pendu" placeholder="Saisir le pendu à faire deviner"></textarea>
		<input type="submit" id="submit" value="Valider">
	</form>

	</div>
	<div class="demibloc" id="resultat"></div>

	<div class="lettresbloc">Lettres</div>
	
	</div>
	</div>

<?php include "footer.php"?>

</body>

</html>

<script>
 
$(document).ready(function(){
 
    $("#submit").click(function(e){
        e.preventDefault();
 
        $.post(
            'generation.php',
            {
                pendu : $("#pendu").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à generation.php
            },
 
            function(data){
 
                if(data == ''){
                     // Le membre n'a pas rentré de pendu
					$("#resultat").html("<p>Erreur lors de la saisie du pendu</p>");
					
                }
                else{
                     // Le membre n'a pas été connecté. (data vaut ici "failed")
					
                     $("#resultat").html(data);
                }
         
            },
        	'text'
         );
    });
});
 
</script>