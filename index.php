<?php
class Book {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function __clone() {
        //okay lang kahit empty
    }
}

$book1 = new Book("Design Patterns", "GoF");
$book2 = clone $book1;
$book2->title = "Advanced Patterns";

echo $book1->title; 
echo PHP_EOL;
echo $book2->title; 