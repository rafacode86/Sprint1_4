<?php
    /*Escriu un programa que defineixi una classe Shape amb un constructor 
    que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; 
    Triangle i Rectangle que heretin de Shape i que calculin respectivament 
    l'àrea de la forma area().*/
    require_once "triangle.php";
    require_once "Rectangle.php";
    $triangle1 = new Triangle(10, 5);
    $triangle1->area();
    $triangle1->printResult();

    $rectangle1 = new Rectangle(10, 5);
    $rectangle1->area();
    $rectangle1->printResult();
?>