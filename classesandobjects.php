<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//Class is providing a blueprint for what a book is. 
//Creating a blueprint of what we need a book to be.
class Book {
    var $title;
    var $author;
    var $pages;

    // Without the constructor below, we would have to manually write out each instance of of what is contained in the class.
    // See ** below for example.
    // But using the constructor and THIS keyword we can pass through these details as parameters
    // and the values of these variables will be passed in each time we create an instance (or object) of the class.
    function __construct($aTitle, $aAuthor, $aPages)
    {
        $this -> title = $aTitle;
        $this -> author = $aAuthor;
        $this -> pages = $aPages; 
    }

};

//Below are Objects, and they are instances of classes. The object would be each instance of
//an actual book rather than the blueprint.

// This instance of Book is made using the __constructor and THIS, passing parameters.
$book1 = new Book("Harry Potter", "JK Rowling", 400);
// echoing out just $book1 will not work as it just returns an objecy.
// below are basic examples of how to pull out information from an object.
echo $book1 -> title."<br>";
//changing the title below
//$book1 -> title = "New title name";
echo $book1 -> author."<br>";
echo $book1 -> pages."<br>";
$book2 = new Book("Lord of the Rings", "Tolkien", 700);


//            ***** 
// $book2 = new Book();
// $book2 -> title = "Lord of the Rings";
// $book2 -> author = "Tolkien";
// $book2 -> pages = 700;

//           ******
// echo $book2 -> title."<br>";
// echo $book2 -> author."<br>";
// echo $book2 -> pages."<br>";
 

?>
    
</body>
</html>