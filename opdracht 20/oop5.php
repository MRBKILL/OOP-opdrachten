<?php 

class Product
{


 public $name = "BERky";
 public $price ;
 public $category;


 public function __construct($name, $price)
 {
    $this->name = ucwords($name);
    $this->price = $price;
 }

 public function formatPrice()
 {
    return number_format($this->price, decimals:2);

 }


 public function setCategory($category){

   $this->category = ucfirst($category);
 
  }
 
 
}

$shoe1 = new Product("Taha Yasin Coban Ollem", 420);
$shoe1->setCategory("naam");


$shoe2 = new Product("De naam boven mij is gay", 10000);
$shoe2->setCategory("de waarheid");


$shoe3 = new Product("die text boven deze is waar", 69);
$shoe3->setCategory("uitleg");


$shoe4 = new Product("Gemaakt door berky onal", 50);
$shoe4->setCategory("credits");




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