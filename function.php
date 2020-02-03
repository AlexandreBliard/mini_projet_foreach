<?php
// UTILISER LA VARIABLE $song pour afficher les données

/*==================== FONCTION =========================*/

function afficheLigne($tab, $cle) {//affichage de ligne
    echo $tab [$cle] ;
}


function afficheRefrain($tab){//affichage du tableau
    foreach ($tab as $ligne){//parcours le tableau
        echo $ligne . '<br>';// affichage résultat et retour ligne
        }echo '<br>'; //retour ligne de fin de paragraphe
    }

function afficheCouplet($tab){//affichage du tableau
    foreach ($tab as $key => $ligne){// création de la variable
        if ($key%2 ){//modulo pour faire comparaison pair ou impair
            echo $ligne . '<br>';// affichage résultat et retour ligne
        }
    }echo '<br>'; //retour ligne de fin de paragraphe
}



/*========================== CODE =============================*/
afficheLigne($song, 'title');
echo "<br>";
echo "<br>";
afficheRefrain($song['data']['chorus_1']);//recherche du bon tableau
afficheCouplet($song['data']['first_verse']);
afficheRefrain($song['data']['chorus_1']);
afficheCouplet($song['data']['second_verse']);
afficheLigne($song, 'author');

