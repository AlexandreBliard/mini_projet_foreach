<?php
// UTILISER LA VARIABLE $song pour afficher les données

/*==================== FONCTION =========================*/

function afficheLigne($tab, $cle) {//affichage de ligne
    echo $tab [$cle] ;
}


function afficheRefrain($tab){//affichage du tableau
    echo '<br>';
    foreach ($tab as $ligne){//parcours le tableau
        echo $ligne . '<br>';// affichage résultat et retour ligne
        }echo '<br>'; //retour ligne de fin de paragraphe
    }

function afficheCouplet($tab){//affichage du tableau
    foreach ($tab as $ligne){//parcours le tableau
        echo $ligne . '<br>';// affichage résultat et retour ligne
    }
}



/*========================== CODE =============================*/
afficheLigne($song, 'title');
echo "<br>";
afficheRefrain($song['data']['chorus']);//recherche du bon tableau
afficheCouplet($song['data']['verse']['first_verse1']);
afficheCouplet($song['data']['verse']['first_verse2']);
afficheCouplet($song['data']['verse']['first_verse3']);
afficheRefrain($song['data']['chorus']);
afficheCouplet($song['data']['verse']['second_verse1']);
afficheCouplet($song['data']['verse']['second_verse2']);
afficheCouplet($song['data']['verse']['second_verse3']);
echo "<br>";
afficheLigne($song, 'author');


