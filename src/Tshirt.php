<?php

namespace App;

class Tshirt implements Sellable{
    
    const PRICE = 30;

    public function getPrice() : int{
        return self::PRICE;
    }
}