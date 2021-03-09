<div class="listependu ">
  <div class="grid-x grid-margin-x">
    <div class="cell medium-2">
        <p style="text-align : center">Sélectionner la série</p>
		
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