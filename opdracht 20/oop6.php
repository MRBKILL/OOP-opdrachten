<?php

class Product
{
    public $name = "Berky";
    public $price;
    public $category;
    public $currency;

    public function __construct($name, $price, $currency = "&euro;")
    {
        $this->name = ucwords($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function formatPrice()
    {
        return $this->currency . number_format($this->price, 2);
    }

    public function setCategory($category)
    {
        $this->category = ucfirst($category);
    }
}

$shoe1 = new Product(name: "telefoon nokia 3000", price: 4000, currency: "&euro;");
$shoe1->setCategory("telefoons");

$shoe2 = new Product(name: "lenovo legion 5 8w9gkl", price: 69420, currency: "&euro;");
$shoe2->setCategory("laptops");

$shoe3 = new Product(name: "mooie schoenen", price: 0, currency: "&euro;");
$shoe3->setCategory("voor de docenten");

$shoe4 = new Product(name: "gaming pc ryzen 5 68000xt pro", price: 5000, currency: "&euro;");
$shoe4->setCategory("gaming pc ");

echo '<br>';

echo $shoe1->name . '<br>';
echo $shoe1->formatPrice() . '<br>';
echo $shoe1->category . '<br>'. '<br>';

echo $shoe2->name . '<br>';
echo $shoe2->formatPrice() . '<br>';
echo $shoe2->category . '<br>'. '<br>';

echo $shoe3->name . '<br>';
echo $shoe3->formatPrice() . '<br>';
echo $shoe3->category . '<br>'. '<br>';

echo $shoe4->name . '<br>';
echo $shoe4->formatPrice() . '<br>';
echo $shoe4->category . '<br>'. '<br>'. '<br>';

var_dump($shoe1);
echo '<br>';
var_dump($shoe2);
echo '<br>';
var_dump($shoe3);
echo '<br>';
var_dump($shoe4);
?>