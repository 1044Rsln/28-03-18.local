<?php


class Taxi extends Automobile{
    protected $number;
    protected $taxpark;
    
    public function __construct($angine, $body_type, $color, $state_number, $number, $taxpark) {
        parent::__construct($angine, $body_type, $color, $state_number);
        $this->number=$number;
        $this->taxpark=$taxpark;
    }
    
    public function __toString() {
        $str = parent::__toString();
        $str .= 'Number: ' . $this->number . '<br>';
        $str .= 'Taxpark: ' . $this->taxpark . '<br>';
        return $str;
    }
}


