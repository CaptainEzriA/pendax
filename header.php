<header>
<?php
    session_start();
    //session_unset();
    //session_destroy();
		if(isset($_SESSION['login']))
		{ include "lecturebdd.php";
      $login=$_SESSION['login'];
			$encours=comptage($login,0);
			$termine=comptage($login,1);?>

    <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle="example-menu"></button>
      <div class="title-bar-title">Menu</div>
    </div>

    <div class="top-bar menu" id="example-menu">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li>
            <a class="nopadd" href="index.php"><img src="icone.png" alt="Icone Pendax"/></a>
          </li>
          <?php if($encours!=0){ ?>
          <li>
            <a href="EnCours.php">Pendus en cours</a>
          </li>
          <?php } ?>
          <li>
            <a href="#">Pendus terminés</a>
            <ul class="menu vertical">
              <?php if($termine!=0){ ?>
              <li><a href="Termines.php">Mes pendus terminés</a></li>
              <?php } ?>
              <li><a href="TerminesTous.php">Tous les pendus terminés</a></li>
            </ul>
          </li>
          <li><a href="Generer.php">Générer un pendu</a></li>
          <li><a href="PageTest.php">Page Test</a></li>
              </ul>
          </div>
          <div class="top-bar-right">
          <ul class="dropdown menu" data-dropdown-menu>
          <li >
            <?php echo "<a href=\"#\">$login</a>"; ?>
            <ul class="menu vertical">
              <li><a href="profil.php">Mon profil</a></li>
              <li><a href="#">Se déconnecter</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
        <?php } ?>  
   

</header>
