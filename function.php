<?php
// UTILISER LA VARIABLE $song pour afficher les données

foreach ($song as $refrain){
    if (is_array($refrain)){
        ?> <br> <?php
        foreach ($refrain as $refrains => $test){
            echo $test ."<br>";
    }
        ?> <br> <?php
    }else
    {
        echo $refrain .'<br>';
    }

    /*

        var_dump($test);
    }*/
}