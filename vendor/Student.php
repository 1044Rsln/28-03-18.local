<?php


class Student  extends Human{
    /**
     *
     * @var string 
     */
    protected $group;
    /**
     *
     * @var string
     */
    protected $email;
    /**
     * 
     * @param type $name
     * @param type $surname
     * @param int $age
     * @param type $address
     * @param type $group
     * @param type $email
     */
    public function __construct($name, $surname, $age, $address, $group, $email) {
        parent::__construct($name, $surname, $age, $address);
        $this->group=$group;
        $this->email=$email;
    }
    public function __toString() {
        $str = parent::__toString();
        $str .= 'Group: ' . $this->group . '<br>';
        $str .= 'Email: ' . $this->email . '<br>';
        return $str;
    }
}
