<?php 

class Product{
    // properties
    public int $id;
    public string $name;
    public float $price;

    // magic method
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice(){
        // Format the price with two decimal places
        return "$" . number_format($this->price,2);
    }

    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}\n";
    }
}

// Instantiate Product object
$product = new Product(1, 'T-shirt', 19.99);
// Display product details
$product->showDetails();