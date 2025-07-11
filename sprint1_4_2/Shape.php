<?php
    class Shape {
        protected int $width;
        protected int $height;
        protected float $result;
        
        public function __construct(int $width, int $height) {
            $this->width = $width;
            $this->height = $height;
        }
        public function printResult() {
            echo $this->result . "\n";
        }
    }


?>