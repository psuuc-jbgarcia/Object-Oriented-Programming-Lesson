<?php

class Car {
    public string $brand;
    private int $year;
    protected string $engine;

    public function drive() {
        echo "Driving...\n";
    }

    private function startEngine() {
        echo "Starting engine...\n";
    }

    protected function stopEngine() {
        echo "Stopping engine...\n";
    }
}

// Create reflection class instance
$ref = new ReflectionClass('Car');

// Get properties
$properties = $ref->getProperties();
echo "Properties of class Car:\n";
foreach ($properties as $prop) {
    $visibility = implode(' ', Reflection::getModifierNames($prop->getModifiers()));
    echo "- " . $prop->getName() . " ($visibility)\n";
}

// Get methods
$methods = $ref->getMethods();
echo "\nMethods of class Car:\n";
foreach ($methods as $method) {
    $visibility = implode(' ', Reflection::getModifierNames($method->getModifiers()));
    echo "- " . $method->getName() . " ($visibility)\n";
}
