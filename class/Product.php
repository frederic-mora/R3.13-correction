<?php

abstract class Product {
        private static $count = 1;
        private $name = "";
        private $description = "";
        protected $price = 0.0;
        private $image = "";
        private $id;
      

        public function __construct($name) {
                $this->name = $name;
                $this->id = Product::$count++;
                
              
        }

          /**
         * Get the product id
         */
        public function getId(): string
        {
                return $this->id;
        }

         /**
         * Get the value of name
         */
        public function getName(): string
        {
                return $this->name;
        }

        /**
         * Get the value of description
         */
        public function getDescription(): string
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */
        public function setDescription(string $description): self
        {
                $this->description = $description;
                return $this;
        }

         /**
         * Get the value of price
         */
        public function getPrice(): float
        {
                return $this->price;
        }      

        /**
         * Set the value of price
         *
         * @return  self
         */
        public function setPrice(float $price): self
        {
                $this->price = $price;
                return $this;
        }

        /**
         * Get the value of image
         */
        public function getImage(): string
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */
        public function setImage(string $image): self
        {
                $tab = explode(".", $image);
                $ext = array_pop($tab);
                if ($ext=="png" || $ext=="jpg" || $ext=="jpeg"){
                        $this->image = $image;
                }
                return $this;
        }
}

?>