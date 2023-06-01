<?php
// auteur: Daniel Kuiper

class Product {
    public $name;
    public $price;
    public $category;

    
    public function formatPrice(){
        return number_format($this->price, decimals: 2);
    }


    public function __construct($name, $price) {
        $this->name = ucfirst($name);

        $this->price = $price;
    }


    public function setCategory($category){
        $this->category = strtoupper($category);
    }

}

$fruit1 = new Product(name: "appel", price: 2.5);
$fruit1->setCategory(category: "rood");

$fruit2 = new Product(name: "mango", price: 4);
$fruit2->setCategory(category: "oranje");

echo $fruit1->name."<br>";
echo $fruit1->formatPrice()."<br>";
echo $fruit1->category."<br><br>";

echo $fruit2->name."<br>";
echo $fruit2->formatPrice()."<br>";
echo $fruit2->category."<br>";

?>