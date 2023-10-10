<?php

require_once("class/Product.php");

class Amiibo extends Product
{
       
        private $compatibility;
       

        public function __construct(string $name, string $compwith)
        {
                parent::__construct($name);
                $this->compatibility = $compwith;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice(): float 
        {
                return round( $this->price * 1.2, 2);
        }

        /**
         * Get the value of manufacturer
         */ 
        public function getCompatibility(): string
        {
                return $this->compatibility;
        }
}

?>