<?php
class Calculator {
    public function __call($method, $args) {
        if ($method === "add") {
            $count = count($args);

            if ($count === 2) {
                return $args[0] + $args[1];
            } elseif ($count === 3) {
                return $args[0] + $args[1] + $args[2];
            } else {
                return "Invalid number of arguments for add()";
            }
        } else {
            return "Method '$method' not found.";
        }
    }
}

$calc = new Calculator();

echo $calc->add(2, 3);      
echo "<br>";
echo $calc->add(1, 2, 3);   
echo "<br>";
echo $calc->add(5);          
?>
