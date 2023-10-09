<?php
class person{
    //properties
    protected $name;

    protected $age;

    public $gender;

    //constructor
    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    //getters
    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getGender(){
        return $this->gender;
    }
}
?>