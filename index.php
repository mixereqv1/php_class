<?php
    class car {
        private $marka, $kolor = 'czerwony', $predkosc, $tab = array();

        function __construct($name) {
            $this->marka = $name;
            echo 'Marka - konstruktor: '.$this->marka;
        }

        function launch() {
            $this->predkosc = 0;
            echo '<br />Predkosc: '.$this->predkosc.'km/h';
            echo '<br />Marka: '.$this->marka;
        }

        function getSpeed() {
            return $this->predkosc;
        }

        function setSpeed() {
            $this->predkosc += 5;
        }

        function __invoke() {
            echo '<br /> Invoke';
        }

        function __set($new, $new_value) {
            $this->tab[$new] = $new_value;
            echo '<br />Ustawiłeś '.$this->tab[$new];
        }

        function __get($new) {
            return $this->tab[$new];
        }
    }

    $nissan = new car('nissan');
    $nissan();
    $nissan -> launch();
    $nissan -> setSpeed();
    echo '<br />Aktualna predkosc: '.$nissan -> getSpeed().'km/h';
    $nissan->__set(0,'abc');
    echo '<br />0: '.$nissan->__get(0);
?>