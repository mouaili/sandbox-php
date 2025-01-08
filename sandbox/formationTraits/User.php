<?php

require_once __DIR__ . "/Logging.php";


class User
{
    use Registration, Connection;

    public function register()
    {
        $this->DisplayMessage("Utilissateur enregistré.");
    }
    public function toConnect()
    {
        $this->ConnectionStatus();
    }
}

$user  = new User();
$user->Register();
echo "<br/>";
$user->toConnect();
echo "<br/>";
$user->DisplayMessage("Je suis incrit sur ce site web.");
