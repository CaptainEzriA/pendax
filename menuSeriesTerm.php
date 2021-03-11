<div class="listependu ">
  <div class="grid-x grid-margin-x">
    <div class="cell medium-2">
        <p class="centre">Sélectionner une série</p>
		<h4>Mes séries favorites</h4>
      <ul class="vertical tabs menuseries" data-tabs id="example-tabs">
	  	
	  	<?php
		  		
				  	$tab=seriestotterm();
					$incr=0;
					foreach ($tab as $ligne)
					{
						$incr++;
						$id="#panel".$incr."v";
						echo'<li class="tabs-title"><a href="'.$id.'">'.$ligne[0].'</a></li>';
					}
		  ?>
      </ul>
	  <p>Gérer mes séries favorites</p>
	  <h4>Autre série</h4>
	  <p>[barre de recherche]</p>
	  <p>Série absente ?</p>