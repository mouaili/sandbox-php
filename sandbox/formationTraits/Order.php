<?php
require_once __DIR__ . "/OrderTracking.php";

class Order
{
    use FollowOrder;

    private $idClient;
    private $addressClient;

    public function __construct($idClient, $addressClient)
    {
        $this->setAttributesCLient(
            $idClient,
            $addressClient
        );
    }

    public function setAttributesCLient($idClient, $addressClient)
    {
        if (is_int($idClient) && is_string($addressClient)) {
            $this->idClient = $idClient;
            $this->addressClient = $addressClient;
        } else {
            throw new InvalidArgumentException('Votre adresse est invalide ');
        }
    }

    public function displayClientOrder()
    {
        echo "IDClient : {$this->idClient} <br> Adresse : {$this->addressClient}";
    }
}

$client =  new Order(1, "258 World Street Center France");
$client->setAttributesOrder("
145AZE6RF", "15/02/2025", "En cours d'acheminement..!");
echo "<br>";
$client->displayClientOrder();
echo "<br>";
echo "<br>";
$client->displayInfosOrder();
