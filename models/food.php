<?php

class foods extends products{
    public $weight;
    public $ingredients;

    function __construct($image, $name, $type, $price, $weight, $ingredients)
    {
        parent::__construct($image, $name, $type, $price);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}

?>