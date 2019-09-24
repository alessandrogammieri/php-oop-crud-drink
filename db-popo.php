<?php 

    class Bancone {

        private $id;
        private $drink_name;
        private $brand;
        private $price;

        public function __construct($row) {
            $this -> setId($row['id']);
            $this -> setDrink($row['drink_name']);
            $this -> setBrand($row['brand']);
            $this -> setPrice($row['price']);
        }

        public function getId() {
            return $this -> id;
        }
        public function setId($id) {
            $this -> id = $id;
        }

        public function getDrink() {
            return $this -> drink_name;
        }
        public function setDrink($drink_name) {
            $this -> drink_name = $drink_name;
        }

        public function getBrand() {
            return $this -> brand;
        }
        public function setBrand($brand) {
            $this -> brand = $brand;
        }

        public function getPrice() {
            return $this -> price;
        }
        public function setPrice($price) {
            $this -> price = $price;
        }

        public function toString() {
            return $this -> getId() . " " 
            . $this -> getDrink() . " - " 
            . $this -> getBrand() . "<br>" 
            . "Prezzo: € " . $this -> getPrice() . "<br>";
        }
    }

?>