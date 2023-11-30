<?php require_once 'logique/logique.php';

foreach ($baseDonneesQuiches as $quiche)
{
    if($quiche['id'] == $_POST['quicheId'])
    {

        $uneQuiche = $quiche;
    }
}



afficher('quiche/quiche', ["quiche"=>$uneQuiche]);