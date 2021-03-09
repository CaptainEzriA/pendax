<?php

function ajoutSerie($serie)
{
    require "connect.php";
    
    if(seriePresente($serie)==false)
    {
        $requete = $BDD -> prepare("INSERT INTO SERIE(nom_serie) VALUES(:nom)");
        $requete -> bindValue('nom',$serie,PDO::PARAM_STR);
        $requete->execute();
        echo"ajout OK";
    }

    else
        echo"Série déjà présente";
}

function ajoutPendu($serie,$phrase,$login)
{
    require "connect.php";
    $id=idSerie($serie);
    if(penduPresent($id,$phrase)==false)
    {

        $requete = $BDD -> prepare("INSERT INTO PENDU(id_serie,phrase,termine,id_user,dateajout) VALUES ($id,:phrase,0,:id,:dat)");
        $requete ->bindValue('phrase',$phrase,PDO::PARAM_STR);
        $requete ->bindValue('id',$login,PDO::PARAM_STR);
        $requete ->bindValue('dat',date("Y-m-d H:i:s"),PDO::PARAM_STR);
        $requete->execute();
        echo"ajout OK";
    }

    else
        echo"Pendu déjà présent";

}

function creationCompte($login,$mdp)
{
    require "connect.php";
    $requete = $BDD -> prepare("INSERT INTO USER (id,mdp) VALUES (:id,:mdp)");
    $requete ->bindValue('id',$login,PDO::PARAM_STR);
    $requete ->bindValue('mdp',$mdp,PDO::PARAM_STR);
    $requete->execute();
}

?>