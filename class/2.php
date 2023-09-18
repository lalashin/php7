<?php

//private 별도의 메서드로

class info{
    private $_name;
    public $_age;

    public function setName($name){
        $this->_name = $name;
    }

    public function getName(){
        return $this->_name;
    }

}

$person = new info();

$person->setName('라라');
$person->_age=15;

//print_r($a);

echo $person->_age;
echo $person->getName();