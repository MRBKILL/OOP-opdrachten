<?php 

class Product
{
 public $name = "kleren";
 public $price ;
 public $category;


 public function formatPrice()
 {
    return number_format($this->price, decimals:2);

 }

 public function setName($name){

  $this->name = ucwords($name);

 }

 public function setCategory($category){

   $this->category = ucfirst($category);
 
  }
}

$kleer1 = new Product();
$kleer1->setName("holle bolle gijs");
$kleer1->price = 70;
$kleer1->setCategory("personen");


$kleer2 = new Product();
$kleer2->setName("shirts van breky");
$kleer2->price = 100;
$kleer2->setCategory("shirts");


$kleer3 = new Product();
$kleer3->setName("nike air max 69");
$kleer3->price = 90;
$kleer3->setCategory("schoenen");


$kleer4 = new Product();
$kleer4->setName("levis broek");
$kleer4->price = 50;
$kleer4->setCategory("broeken");




echo '<br>';


echo $kleer1->name . '<br>';
echo $kleer1->formatPrice() . '<br>';
echo $kleer1->category . '<br>'. '<br>';


echo $kleer2->name . '<br>';
echo $kleer2->formatPrice() . '<br>';
echo $kleer2->category . '<br>'. '<br>';


echo $kleer3->name . '<br>';
echo $kleer3->formatPrice() . '<br>';
echo $kleer3->category . '<br>'. '<br>';


echo $kleer4->name . '<br>';
echo $kleer4->formatPrice() . '<br>';
echo $kleer4->category . '<br>'. '<br>'. '<br>';


var_dump($kleer1);
echo '<br>';
var_dump($kleer2);
echo '<br>';
var_dump($kleer3);
echo '<br>';
var_dump($kleer4);
?>