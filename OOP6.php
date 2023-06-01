<?php
// auteur: Daniel Kuiper

class Product {
    public $name;
    public $price;
    public $category;
    public $currency;

    
    public function formatPrice(){
        return number_format($this->price, decimals: 2);
    }


    public function __construct($price, $name = "een fruit", $currency = "&euro") {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }


    public function setCategory($category){
        $this->category = strtoupper($category);
    }

}


$fruit1 = new Product(price: 2.5, name: "appel", currency: "$");
$fruit1->setCategory(category: "geel");

// $fruit2 = new Product(price: 4, name: "mango", currency: "$");
// $fruit2->setCategory(category: "oranje");


echo $fruit1->name."<br>";
echo $fruit1->currency;
echo $fruit1->formatPrice()."<br>";
echo $fruit1->category;

?>