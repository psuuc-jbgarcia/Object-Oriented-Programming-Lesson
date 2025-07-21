<?php
class Helper {
    public static function greet($name) {
        return "Hello, $name!";
    }
}

// ✅ No need to create an object
echo Helper::greet("Jerico");  // Output: Hello, Jerico!
