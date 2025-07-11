<?php

    require_once "Shape.php";

    class Rectangle extends Shape {
        /*public function __construct($width, $height) {
            parent::__construct($width, $height); no es necesario heredar del constructor como en java
        }*/

        public function area() {
            $this->result = ($this->width * $this->height);
        }

    }
?>