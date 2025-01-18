<?php
// Kelas abstrak Shape
abstract class Shape {
    // Metode abstrak
    abstract public function getArea();
    abstract public function getPerimeter();

    // Metode
    public function displayInfo () {
        echo "Area: ".$this->getArea()."\n";
        echo "Perimeter: ".$this->getPerimeter()."\n";
    }

}

// Kelas Circle yang mengimplementasikan kelas abstrak Shape
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius,2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}

// Kelas Rectangle yang mengimplementasikan kelas abstrak Shape
class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length * $this->width);
    }
}

// Membuat objek Circle
$circle = new Circle(5);
echo "Circle:\n";
$circle->displayInfo();

// Membuat objek Rectangle
$rectangle = new Rectangle(4,6);
echo "<br>Rectangle:\n";
$rectangle->displayInfo();
?>