<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$myRdm = rand(0, 50);?>
<div><?= $myRdm ?></div>

/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
<?php
$myRdm2 = rand(50, getrandmax());?>
<div><?= $myRdm2 ?></div>

/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 25, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.
<?php
$myRdm3 = rand(0, 50);
if ($myRdm3 <=25) {?>
    <p>Vous avez gagné</p><?php
}
else {?>
    <p>Vous avez perdu</p><?php
}

/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.
function getRandom (int $min, int $max):int {
    $myRandom = rand($min , $max);
    if ($myRandom >= $max && $myRandom < $max -100) {
        getRandom($min, $max);

    }

    return$myRandom;

}
echo getRandom(50, 2100);





