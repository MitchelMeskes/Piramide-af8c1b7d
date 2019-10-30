<?php

echo "hoeveel lagen wil je Hebben?\n";
    $hoeveel = readline();

for ($rij = 0; $rij <= $hoeveel; $rij++){


        for ($volgorde = 0; $volgorde <= $rij; $volgorde++){

            echo "*";
        }
        echo PHP_EOL;

}
