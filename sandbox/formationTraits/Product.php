<?php

require_once __DIR__ . "/OrderTracking.php";


class Product
{
    use FollowOrder;

    private $nameProduct;
    private $descriptionProduct;
    private $priceProduct;

    public function __construct($nameProduct, $descriptionProduct, $priceProduct)
    {

        $this->nameProduct = $nameProduct;
        $this->descriptionProduct = $descriptionProduct;
        $this->priceProduct = $priceProduct;
    }

    public function displayTheProduct()
    {
        echo "Nom du produit : {$this->nameProduct}<br>Description du produit : {$this->descriptionProduct}<br>Prix du produit : {$this->priceProduct} euros";
    }
}


$product = new Product("Pc portable", "Un Pc très moderne de la Marque ACER", 1236);
$product->setAttributesOrder("15AER458FR", "15/01/2025", "En cous de traitement");
echo "<br/>";
$product->displayTheProduct();
echo "<br/>";
echo "<br/>";
$product->displayInfosOrder();
echo "<br/>";
echo "<br/>";
