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
    public function __construct($name, $surname, $age, $address) {
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->address=$address;
    }
    public function __toString() {
        $str = '';
        $str .= 'Name: ' . $this->name;
        $str .= 'Surname: ' . $this->surname;
        $str .= 'Age: ' . $this->age;
        $str .= 'Address: ' . $this->address;
        return $str;
    }
}
