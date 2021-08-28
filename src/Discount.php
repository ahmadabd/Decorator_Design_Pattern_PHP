<?php

namespace App;

class Discount extends TshirtDecorator{
    
    const EXTRA_PRICE = 5;
    
    public function getPrice() : int{
        return $this->sellable->getPrice() - self::EXTRA_PRICE;
    }
}