<?php


class Automobile {
    /**
     *
     * @var int
     */
    protected $angine;
    /**
     *
     * @var string
     */
    protected $body_type;
    /**
     *
     * @var string
     */
    protected $color;
    /**
     *
     * @var string
     */
    protected $state_number;
    /**
     * 
     * @param int $angine
     * @param string $body_type
     * @param string $color
     * @param string $state_number
     */
      public function __construct($angine, $body_type, $color, $state_number) {
        $this->angine=$angine;
        $this->body_type=$body_type;
        $this->color=$color;
        $this->state_number=$state_number;
    }
    
    public function __toString() {
        $str = '';
        $str .= 'Angine: ' . $this->angine . '</br>';
        $str .= 'Body type: ' . $this->body_type . '</br>';
        $str .= 'Color: ' . $this->color . '</br>';
        $str .= 'State number: ' . $this->state_number . '</br>';
        return $str;
    }

}
