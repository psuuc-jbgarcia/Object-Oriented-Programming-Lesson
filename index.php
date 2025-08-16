<?php
class Message{

    public static $message;

    public static function sayHello(){
        echo self::$message;
    }
}

Message::$message = "Hello";
Message::sayHello();
?>
