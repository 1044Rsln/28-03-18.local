<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author web
 */
class Test {
    /**
     *
     * @var string
     */
    protected  $name;
    
    protected  $suname;
    protected  $age;
    /**
     * 
     * @param string $name
     * @return boolean
     */
    public function setName($name) {
        if(is_string($name)){
            $this->name=$name;
            return TRUE;
        } else {
            return FALSE;    
        }
    }
    
    public function setSurName($surname) {
        if(is_string($surname)){
            $this->surname=$surname;
            return TRUE;
        } else {
            return FALSE;    
        }
    
    }
    
    public function setAge($age) {
        if (is_int($age)) {
            if ($age > 0) {
                $this->age = $age;
                return TRUE;
            } else {
                return FALSE;
            }
            } else {
                return FALSE;
            }
        }
        
       /**
        * 
        * @param type $name
        * @param type $value
        */
        
        public function __set($name, $value) {
            $method_name.='set' . ucfirst($name);
            //получаем имя в формате setсвойство
            if(method_exists($this, $method_name)){
                $this->$method_name($value);
            }
        }
        
        public function __get($name) {
            if(property_exists($this, $name)){
                return $this->name;
            } else {
                return FALSE;
            }
        }
    }


