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
						  echo'<div class="large-10 small-12 large-offset-1 pendus">'.$pendu[0].'</div>';
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