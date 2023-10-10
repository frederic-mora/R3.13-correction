<?php
require_once("class/Stock.php");

class Cart {

    private $content;

    public function __construct(){
        $this->content = [];
    }

    public function buy(string $id){
        if ( isset( $this->content[$id] ) == false ){
            $this->content[$id] = 1;
        }
        else{
            $this->content[$id]++;
        }
    }

    public function getTotal(Stock $stock): float {
        $total = 0;
        foreach($this->content as $id => $nb ){
            $p = $stock->getProductById($id);
            $total = $total + $nb * $p->getPrice();
        }
        return $total;
    }


    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }
}

?>