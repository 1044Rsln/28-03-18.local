<?php


class Human {
    protected $name;
    protected $surname;
    protected $age;
    protected $address;
    
    /**
     * 
     * @param string $name
     * @param string $surame
     * @param int $age
     * @param mixed $address
     */
    public function __construct($name, $surame, $age, $address) {
        $this->name=$name;
        $this->name=$surname;
        $this->name=$age;
        $this->name=$address;
    }
    public function __toString() {
        $str = '';
        $str .= 'Name: ' . $this->name=$name;
        $str .= 'Surname: ' . $this->surname=$suname;
        $str .= 'Age: ' . $this->age=$age;
        $str .= 'Address: ' . $this->name=$name;
        return $str;
    }
}
