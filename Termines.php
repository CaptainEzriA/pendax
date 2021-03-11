<!doctype html>

<html>

<head>
		<?php include "head.php";?>
		<title>Pendax </title>
	</head>
<body>
	<?php include "header.php" ;
	if(isset($_SESSION['login']))
	{
		$login=$_SESSION['login']; ?>

	
	<h2>Mes pendus terminés</h2>
	<div class="listependu ">
  <div class="grid-x grid-margin-x">
    <div class="cell medium-2">
		<p class="centre">Sélectionner une série</p>
		
      <ul class="vertical tabs menuseries" data-tabs id="example-tabs">
	  	<?php
		  		
				  	$tab=seriestotlog($login,1);
					$incr=0;
					foreach ($tab as $ligne)
					{
						$incr++;
						$id="#panel".$incr."v";
						echo'<li class="tabs-title"><a href="'.$id.'">'.$ligne[0].'</a></li>';
					}
		  ?>
      </ul>
    </div>
    <div class="cell medium-10">
      <div class="tabs-content vertical" data-tabs-content="example-tabs">
		  <?php 

		  	$incr=0;
			foreach ($tab as $ligne)
			  {
				$pend=pendustotlog($ligne[0],$login,1);
				$incr++;  
				$id="panel".$incr."v";
			 
				  echo'<div class="tabs-panel" id="'.$id.'">
          			<h3>'.$ligne[0].'</h3>';
					echo '<div class="grid-x grid-margin-x">';

					  foreach($pend as $pendu)
					  {
						  echo'<div class="row large-10 small-12 large-offset-1 blocpendus"><div class="grid-x grid-margin-x"><div class="columns large-10 small-10 pendus">'.$pendu[0];
						  echo'</div><div class="columns large-2 small-2 dates">[19.03.2021]</div>';
						  echo'</div><div class="columns large-2 small-2 dates">19.03.2021</div>';
						  echo'<br/><button class="buttonpendu">Le reproposer</button></div></div>';
					  }
					  echo'</div></div>';
			  }

		  ?>
       
      </div>
    </div>
  </div>
</div>
			<?php } ?>

	<?php include "footer.php"?>
</body>

</html>