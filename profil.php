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

	
	<h2>Mon profil</h2>
	
				<div class="listependu">
				<div class="grid-x grid-margin-x">
				<div class="cell medium-2">
				<ul class="vertical tabs menuseries" data-tabs id="example-tabs">
                <li class="tabs-title"><a href="#panel1v">Mes séries favorites</a></li>
                <li class="tabs-title"><a href="#panel2v">Mon compte</a></li>
				</ul>
				</div>
				<div class="cell medium-10">
				<div class="tabs-content vertical" data-tabs-content="example-tabs">
                <div class="tabs-panel" id="panel1v">mes séries favs
                </div>
                <div class="tabs-panel" id="panel2v">compte
                </div>

				</div>
				</div>
			</div>
			</div>
						<?php } ?>

	<?php include "footer.php"?>
</body>

</html>