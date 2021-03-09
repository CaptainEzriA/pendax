<div id="container">

	<div class="menser">
		<p style="text-align : center">Sélectionner la série</p>
		
		<ul class="vertical tabs menuseries scroll" data-tabs id="example-tabs">
			
			<?php
					
					$tab=seriestot();
					$incr=0;
					foreach ($tab as $ligne)
					{
						$incr++;
						$id="#panel".$incr."v";
						echo'<li class="tabs-title"><a href="'.$id.'">'.$ligne[0].'</a></li>';
					}
			?>
		</ul>
		<p style="text-align : center">Autre série ?</p>
</ul>
				</div>


				

