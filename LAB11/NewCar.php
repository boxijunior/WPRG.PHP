<?php

namespace LAB11;

class Car {
    public static $count = 0;

    private $model;
    private $price;
    private $exchangeRate;


    public function __construct($model, $price, $exchangeRate) {
        $this->model = $model;
        $this->price = $price;
        $this->exchangeRate = $exchangeRate;
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getExchangeRate() {
        return $this->exchangeRate;
    }

    public function setExchangeRate($exchangeRate) {
        $this->exchangeRate = $exchangeRate;
    }

    public function value() {
        return $this->price * $this->exchangeRate;
    }

    public function __toString() {
        return "Model: {$this->model}, Price: {$this->price} EUR, Exchange Rate: {$this->exchangeRate} PLN\n";
    }
}

class NewCar extends Car {

    private $alarm;
    private $radio;
    private $climatronic;

    public function __construct($model, $price, $exchangeRate, $alarm, $radio, $climatronic)
    {
        parent::__construct($model, $price, $exchangeRate);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->climatronic = $climatronic;
    }

    public function getAlarm() {
        return $this->alarm;
    }

    public function setAlarm($alarm) {
        $this->alarm = $alarm;
    }

    public function getRadio() {
        return $this->radio;
    }
    public function setRadio($radio) {
        $this->radio = $radio;
    }
    public function getClimatronic() {
        return $this->climatronic;
    }

    public function setClimatronic($climatronic) {
        $this->climatronic = $climatronic;
    }

    public function value() {
     $baseValue = parent::value();
     if ($this->alarm) {
         $baseValue *= 1.05;
     }
     if ($this->radio) {
         $baseValue *= 1.075;
     }
     if ($this->climatronic) {
         $baseValue *= 1.10;
     }
     return $baseValue;
    }

    public function __toString() {
     $alarmStr = $this->alarm ? "Yes" : "No";
     $radioStr = $this->radio ? "Yes" : "No";
     $climatronicStr = $this->climatronic ? "Yes" : "No";

     return parent::__toString() . ", Alarm: {$alarmStr}, Radio: {$radioStr}, Climatronic: {$climatronicStr}\n";
    }
}

$car1 = new Car("307cc", 5000, 4.5);
echo $car1 -> __toString() . "\n";

$car2 = new Car("406", 1000, 4.3);
echo $car2 -> __toString() . "\n";

$car3 = new Car("b6 r6", 10000, 4.5);
echo $car3 -> __toString() . "\n";

$car4 = new Car("s80 v8", 12000, 4.5);
echo $car4 -> __toString() . "\n";


?>