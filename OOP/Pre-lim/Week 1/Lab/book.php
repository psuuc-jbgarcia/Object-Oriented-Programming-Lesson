<?php
class Book{
    public $author;
    public $title;
    public $year;
    public function BookInfo(){
    return "Title: $this->title, Author: $this->author, Year: $this->year";
}

}

$book1=new Book();
$book1->title="OOP";
$book1->author="John Doe";
$book1->year="2012";

echo $book1->BookInfo();
?>