<?php 

class Book{

	var $title;
	var $author;
	var $pages;
	public function __construct($atitle, $aauthor,$apages){
  $this->title = $atitle;
  $this->author = $aauthor;
  $this->pages = $apages;
}
}
$book1 = new Book("harry potter","jk rowling",400);

$book2 = new Book("himu", "humayun ahmed", 200);


echo $book1->title;





?>