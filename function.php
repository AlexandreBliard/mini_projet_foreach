<?php
// UTILISER LA VARIABLE $song pour afficher les données

// fonction pour afficher les tableaux

function afficheCouplet($tab){
    foreach ($tab as $goon){
       echo  $goon . '<br>';
   }echo '<br>';
}

function afficheLigne($tab, $cle){
    echo $tab [$cle] ;
}

/*===============code======================*/
afficheLigne($song, 'title');
echo "<br>";
echo "<br>";
foreach ($song ['data'] as $key => $test){
    foreach ($test as $subtest){
        echo $key." : ";
    }
    afficheCouplet($test);
   /* afficheCouplet($test,'first_verse');
    afficheCouplet($test,'chorus');
    afficheCouplet($test,'second_verse');*/
}

afficheLigne($song, 'author');