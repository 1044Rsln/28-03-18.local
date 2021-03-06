<?php


class Taxi extends Automobile{
    /**
     *
     * @var int
     */
    protected $number;
    /**
     *
     * @var string
     */
    protected $taxpark;
    /**
     * 
     * @param int $angine
     * @param string $body_type
     * @param string $color
     * @param string $state_number
     * @param int $number
     * @param string $taxpark
     */
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


