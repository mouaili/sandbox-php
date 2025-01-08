<?php

trait FollowOrder
{
    private $newOrder;
    private $dateOrder;
    private $statusOrder;

    public function setAttributesOrder($newOrder, $dateOrder, $statusOrder)
    {

        $this->newOrder = $newOrder;
        $this->dateOrder = $dateOrder;
        $this->statusOrder = $statusOrder;
    }

    public function displayInfosOrder()
    {
        echo "Numéro de la commande : {$this->newOrder}<br>Date de la commande : {$this->dateOrder}<br> Status de la commande : {$this->statusOrder}";
    }
}
