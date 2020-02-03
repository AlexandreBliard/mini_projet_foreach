<?php
// UTILISER LA VARIABLE $song pour afficher les données

// fonction pour afficher les tableaux


function afficheLigne($tab, $cle) {
    echo $tab [$cle] ;
}
function afficheCoupletCle($tab) {
    foreach ($tab as $cle => $test) {//premier passage et création des clés
        foreach ($test as $key => $subtest){//lecture des clés premier tableau et créations clés deuxième tableau
        echo $cle . ' : ' . 'ligne => ' . $key . " " . $subtest . '<br>';//affichage clés, deuxième clés et texte
        }
    echo "<br>";
    }
}

/*===============code======================*/
afficheLigne($song, 'title');
echo "<br>";
echo "<br>";
afficheCoupletCle($song['data']);
afficheLigne($song, 'author');

