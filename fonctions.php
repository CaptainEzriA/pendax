<?php
    function escape($valeur) {return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);}

    function transformation($phrase,$lettres)
    {
       
        $pendutexte = "";
        $espacetexte="&nbsp;&nbsp;&nbsp;";
        $accentA = "àâä";
        $accentE = "éèêë";
        $accentC = "ç";
        $accentU = "ùûü";
        $accentI = "ïî";
        $accentO = "ôö";
        $accentN = "ñ";
        $lettrestot = $lettres.strtolower($lettres);
        $caractspe = array('?', ',', '!', '.', ':', ' ', '\'', '’', '…', '-', '\"', '»', '«', '“', '”', ';','+','&','#');
        $lettres2 = str_split($lettres);

        foreach($lettres2 as $i)
        {
                if ($i == 'A')
                {
                    $lettrestot = $lettrestot.$accentA;
                }

                if ($i == 'E')
                {
                    $lettrestot = $lettrestot.$accentE;
                }

                if ($i == 'C')
                {
                    $lettrestot = $lettrestot.$accentC;
                }

                if ($i == 'U')
                {
                    $lettrestot = $lettrestot.$accentU;
                }

                if ($i == 'O')
                {
                    $lettrestot = $lettrestot.$accentO;
                }

                if ($i == 'I')
                {
                    $lettrestot = $lettrestot.$accentI;
                }

                if ($i == 'N')
                {
                    $lettrestot = $lettrestot.$accentN;
                }
        }
        $phrase2 = str_split($phrase);
        foreach ($phrase2 as $i)
            {

                if (in_array($i,$caractspe) || str_contains($lettrestot,$i))
                {
                    if (strlen($pendutexte) >= 2)

                    {
                        if (($pendutexte[strlen($pendutexte)-1] == ' ') & (!in_array($pendutexte[strlen($pendutexte)-2],$caractspe)))
                        {
                            $pendutexte = trim($pendutexte);
                        }
                    }

                    $pendutexte = $pendutexte.$i;


                    if ($i == ' ')
                    {
                        $pendutexte = $pendutexte.$espacetexte;
                    }
                }

                else
                {
                    $pendutexte = $pendutexte."_ ";
                }
            }

            return $pendutexte;


    }


?>