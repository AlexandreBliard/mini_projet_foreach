<?php
// UTILISER LA VARIABLE $song pour afficher les données

// fonction pour afficher les tableaux
function afficheCouplet($tab, $precis){
    foreach ($tab[$precis] as $goon){
        echo $goon ."<br>";
    }echo "<br>";
}
function afficheLigne($tab, $cle){
    echo $tab [$cle] ;
    
}

/*===============code======================*/
afficheLigne($song, 'title');
echo "<br>";
echo "<br>";
afficheCouplet($song,'chorus');
afficheCouplet($song,'first_verse');
afficheCouplet($song,'chorus');
afficheCouplet($song,'second_verse');
afficheLigne($song, 'author');