<?php 

class Fare {
 
    private $age;
    var $distance;
    private $fare;

    public function setAge($new_age){
        $this->age = $new_age;
    }

    public function setDistance($new_distance){
        $this->distance = $new_distance;
    }


    public function getAge(){
        return $this->age;
    }

    public function getDistance(){
        return $this->distance;
    }


    public function displayAge(){
        return $this->age;
    }

    public function setFare(){
        if($this->distance <= 4){
            $this->fare = 8;
        }
        if($this->distance > 4){
            $this->fare = $this->distance + 4;
        }
        if($this->age >= 60){
            $this->fare *= 0.8;
        }
    }

    public function getFare(){
        return $this->fare;
    }

    private function displayValues(){
        echo "age" . $this->age . "<br>";
        echo "dictance" . $this->distance . "<br> <br>";
        echo "Fare" . $this->fare . "<br> <br>";
    }
}
?>