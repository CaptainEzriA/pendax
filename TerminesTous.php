<!doctype html>

<html>

<head>
		<?php include "head.php";?>
		<title>Pendax </title>
	</head>
<body>
	<?php include "header.php" ;?>
    <h2>Tous les pendus terminés</h2>
	<?php include "menuSeriesTerm.php" ; ?>
    </div>
	<div class="cell medium-10" >
      <div class="tabs-content vertical" data-tabs-content="example-tabs">
		  <?php 

		  	$incr=0;
			foreach ($tab as $ligne)
			  {
				$pend=pendustot($ligne[0]);
				$incr++;  
				$id="panel".$incr."v";
			 
				  echo'<div class="tabs-panel" id="'.$id.'">
          			<h3>'.$ligne[0].'</h3>';
					echo '<div class="grid-x grid-margin-x">';

					  foreach($pend as $pendu)
					  {
						echo'<div class="row large-10 small-12 large-offset-1 blocpendus"><div class="grid-x grid-margin-x"><div class="columns large-10 small-10 pendus">'.$pendu[0];
						echo'</div><div class="columns large-2 small-2 dates">[19.03.2021]</br>[pseudo]</div>';
						echo'<br/><button class="buttonpendu">Le proposer</button></div></div>';
					  }
					  echo'</div></div>';
			  }

		  ?>
       
      </div>
    </div>
  </div>
</div>

	<?php include "footer.php"?>
</body>

</html>