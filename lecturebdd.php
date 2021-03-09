<?php

function connexion($login,$mdp)
{
    require "connect.php";
    
    $requete = "SELECT * FROM USER";
    $resultat = $BDD -> query($requete);
    
    while($ligne=$resultat->fetch())
    {
        if($ligne['id']==$login and $ligne['mdp']==$mdp)
        {
            return true;
        }
    }
    return false;
}


function comptage($login,$termine)
{
    require "connect.php";
    $requete = $BDD -> prepare("SELECT COUNT(*) FROM PENDU WHERE id_user=:id AND termine=$termine");
    $requete -> bindValue('id',$login,PDO::PARAM_STR);
    $requete->execute();
    $nb=$requete->fetchColumn();

    return $nb;

}

function comptageTot($termine)
{
    require "connect.php";
    $requete = "SELECT COUNT(*) FROM PENDU WHERE termine=$termine";
    $nb = $BDD -> query($requete)->fetchColumn();
    
    return $nb;
}

function seriestotterm()
{
    require "connect.php";
    $requete = "SELECT nom_serie FROM SERIE, PENDU WHERE SERIE.id_serie=PENDU.id_serie AND termine=1 ORDER BY nom_serie ASC";
    $res= $BDD -> query($requete);
    return $res -> fetchall();
}

function seriestot()
{
    require "connect.php";
    $requete = "SELECT nom_serie FROM SERIE, PENDU WHERE SERIE.id_serie=PENDU.id_serie ORDER BY nom_serie ASC";
    $res= $BDD -> query($requete);
    return $res -> fetchall();
}

function seriestotlog($login, $statut)
{
    require "connect.php";
    $requete = $BDD -> prepare("SELECT nom_serie FROM SERIE, PENDU WHERE SERIE.id_serie=PENDU.id_serie AND termine=$statut AND id_user=:id ORDER BY nom_serie ASC");
    $requete -> bindValue('id',$login,PDO::PARAM_STR);
    $requete->execute();
    $res=$requete -> fetchall();

    return $res;
}

function pendustot($serie)
{
    require "connect.php";
    $requete = "SELECT phrase FROM PENDU, SERIE WHERE SERIE.id_serie=PENDU.id_serie AND termine=1 AND nom_serie='$serie' ";
    $res= $BDD -> query($requete);

    return $res -> fetchall();
}

//retourne tous les pendus pour un statut, user et série données
function pendustotlog($serie,$login,$statut)
{
    require "connect.php";
    $requete = $BDD -> prepare("SELECT phrase FROM PENDU, SERIE WHERE SERIE.id_serie=PENDU.id_serie AND termine=$statut AND nom_serie='$serie' AND id_user=:id");
    $requete -> bindValue('id',$login,PDO::PARAM_STR);
    $requete->execute();
    $res=$requete -> fetchall();

    return $res;
}

//vérifie si la série est présente dans la table série
function seriePresente($serie)
{
    require "connect.php";
    $requete = $BDD -> prepare("SELECT COUNT(*) FROM SERIE WHERE nom_serie=:serie");
    $requete -> bindValue('serie',$serie,PDO::PARAM_STR);
    $requete->execute();
    $nb=$requete->fetchColumn();

    if($nb==0)
        return false;
    
    else
        return true;
}

//vérifie si le pendu est présente dans la table pendu pour une série donnée
function penduPresent($serie,$phrase)
{
    require "connect.php";
    $requete = $BDD -> prepare("SELECT COUNT(*) FROM PENDU WHERE id_serie=:serie AND phrase=:phrase");
    $requete -> bindValue('serie',$serie,PDO::PARAM_STR);
    $requete -> bindValue('phrase',$phrase,PDO::PARAM_STR);
    $requete->execute();
    $nb=$requete->fetchColumn();

    if($nb==0)
        return false;
    
    else
        return true;
}

//récupère l'id de la série en fonction de son nom
function idSerie($serie)
{
    require "connect.php";
    $requete = $BDD -> prepare("SELECT id_serie FROM SERIE WHERE nom_serie=:serie");
    $requete -> bindValue('serie',$serie,PDO::PARAM_STR);
    $requete->execute();
    $id=$requete->fetchColumn();
    return $id;
}

?>