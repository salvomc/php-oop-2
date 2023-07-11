<?php

class games extends products{
    public $characteristics;
    public $size;

    function __construct($image, $name, $type, $price, $characteristics, $size)
    {
        parent::__construct($image, $name, $type, $price);
        $this->characteristics = $characteristics;
        $this->size = $size;
    }
}

?>