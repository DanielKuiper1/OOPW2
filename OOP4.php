<?php
// auteur: Daniel Kuiper

class Product {
    public $name;
    public $price;
    public $category;

    public function formatPrice(){
        return number_format($this->price, decimals: 2);
    }

    public function setName($name){
        $this->name = ucfirst($name);
    }

    public function setCategory($category){
        $this->category = strtoupper($category);
    }

}

$fruit1 = new Product();
$fruit1->setName(name: "Appel");
$fruit1->price = 2.5;
$fruit1->setCategory(category: "Rood");

echo $fruit1->name."<br>";
echo $fruit1->formatPrice()."<br>";
echo $fruit1->category."<br>";

?>