<?php

require_once("class/Tshirt.php");

class Tshirt extends Product
{
        
        private $sizes;
     
        /**
         * Get the value of sizes
         */
        public function getSizes(): array
        {
                return $this->sizes;
        }

        /**
         * Set the value of sizes
         *
         * @return  self
         */
        public function setSizes(array $sizes): self
        {
                $this->sizes = $sizes;
                return $this;
        }

}
