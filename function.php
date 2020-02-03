<?php
// UTILISER LA VARIABLE $song pour afficher les données

/*==================== FONCTION =========================*/

function afficheLigne($tab, $cle) {//affichage de ligne
    echo $tab [$cle] ;
}
function afficheRefrain($tab){//affichage du tableau
    foreach ($tab as $ligne){
        echo $ligne . '<br>';
    }echo "<br>";
}



/*========================== CODE =============================*/
afficheLigne($song, 'title');
echo "<br>";
echo "<br>";
afficheRefrain($song['data']['chorus']['chorus_1']);//recherche du bon tableau
afficheRefrain($song['data']['verse']['first_verse']);
afficheRefrain($song['data']['chorus']['chorus_1']);
afficheRefrain($song['data']['verse']['second_verse']);
afficheLigne($song, 'author');

