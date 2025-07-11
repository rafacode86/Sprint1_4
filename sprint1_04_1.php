<?php

    /*Crea una classe Employee, defineix com a atributs el seu nom i sou. 
    Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
    Plantejar un segon mètode print que imprimeixi el nom i un missatge si 
    ha de pagar o no impostos (si el sou supera 6000, paga impostos).
    */

    class Employee {
        private string $name;
        private int $salary;
        public function initialize($name, $salary) {
            $this->name = $name;
            $this->salary = $salary;

            $respuesta = "Name: $name Salary: $salary.";
            return $respuesta;
        }

        public function print() {
            $taxes = " ";
            if ($this->salary > 6000) {
                $taxes = " si";
            } else {
                $taxes = " no";
            }
            echo $this->name . $taxes . " tiene que pagar impuestos";
        }


    }


    $employ1 = new Employee();
    $employ1 ->initialize("Pepe", 4000);
    $employ1->print();

?>