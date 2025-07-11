<?php
    
    require_once "Shape.php";

    class Triangle extends Shape {
        /*public function __construct($width, $height) {
            parent::__construct($width, $height);
        }*/

        public function area() {
            $this->result = ($this->width * $this->height) / 2;
        }

    }
?>