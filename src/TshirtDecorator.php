<?php

namespace App;

abstract class TshirtDecorator implements Sellable {
    
    function __construct(public Sellable $sellable){}
    
    public function getPrice() : int{
        return $this->sellable->getPrice();
    }
}