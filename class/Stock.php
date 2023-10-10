<?php
require_once("class/Product.php");
class Stock {
    private $products;

    public function __construct(){
            $this->products = [];
    }

    public function getProductById($id): Product{
      
           return $this->products[$id];
    }

    public function addProduct(Product $p): self{

            $this->products[$p->getId()] = $p;
            return $this;

    }

    /**
     * Get the value of products
     */
    public function getProducts()
    {
        return $this->products;
    }
}

?>