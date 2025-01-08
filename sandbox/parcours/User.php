<?php

class User
{
    protected string $firstname;
    protected string $lastname;
    protected string $email;
    protected int $age;
    protected int $note;

    const NREF_LOW = 5;
    const NREF_HIGH = 10;

    public function __construct($firstname, $lastname, $email, $age)
    {
        $this->setAttributesUser($firstname, $lastname, $age);
        $this->setEmailValidate($email);
    }

    public function setAttributesUser($firstname, $lastname, $age)
    {
        if (is_string($firstname) && is_string($lastname) && is_int($age)) {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->age = $age;
        }
    }

    public function getAttributesUser()
    {
        return [
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email" => $this->email,
            "age" => $this->age,
        ];
    }

    public function setEmailValidate($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }
    }

    public function getDegreeImplicationUser($value)
    {
        if ($this->getNoteValue($value) <= self::NREF_LOW) {
            echo "La note est en dessous de la moyenne";
        } else if ($this->getNoteValue($value) <= self::NREF_HIGH) {
            echo "La note est au dessus de la moyenne";
        }
    }

    public function setNoteValue($note)
    {
        if (is_int($note)) $this->note = $note;
    }

    public function getNoteValue($value)
    {
        return $this->note = $value;
    }

    public function listAttributesUser()
    {
        $output = "";
        foreach ($this as $attribute => $value) {
            $output .=  $attribute . " => " . $value . "<br>";
        }

        return $output;
    }
}

$user = new User("Franc", "Bauer", "francbauer@gmail.com", 28);
echo "<br>";
$user->getDegreeImplicationUser(8);
echo "<br>";
echo "<br>";
echo $user->listAttributesUser();
