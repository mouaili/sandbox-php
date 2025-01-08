<?php
/*
*Le but des traits dans Php est de réutiliser le code dans d'autres classes, par exemeple, et la facilité de la gestion du code modulaire:

**/
trait Registration
{
    public function DisplayMessage($message)
    {
        echo "Inscription : " . $message;
    }
}

trait Connection
{
    public function ConnectionStatus()
    {
        echo "-Nouvelle connexion!";
    }
}
