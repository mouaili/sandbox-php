<?php

require_once __DIR__ . "/Trait1.php";
require_once __DIR__ . "/Trait2.php";
require_once __DIR__ . "/Trait3.php";

class ExempleClass
{
    use Trait1, Trait2, Trait3 {
        /*
        * Favoriser la méthode displayMessage() du trait 1(Trait1), en Php,
        * avec l'opérateur de portée (::) + (insteadof)
        **/
        Trait1::displayMessage insteadof Trait2, Trait3;
        /*
        * ¨Pour afficher les deux méthodes, il faut passer par : 
        * le mécanisme d'un (alias as) * et d'attribuer un nouveau nom à la même fonction:
        **/
        Trait2::displayMessage as getMessageTrait2;
        Trait3::displayMessage as getMessageTrait3;
    }
}

$exemple = new ExempleClass();
$exemple->displayMessage();
echo "<br/>";
$exemple->getMessageTrait2();
echo "<br/>";
$exemple->getMessageTrait3();
