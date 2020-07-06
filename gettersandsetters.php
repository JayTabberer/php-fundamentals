<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Movie{
    public $title;
    private $rating;
    // Public key word means that the variable $title is available to be modified ourisd of the class.
    // private key word means that the variable $rating is not accessable outside of this class


    // The below code is an example of getters and setters limiting the amount of options that can be passed in
    // and not editable outside of the class.

    // The below __construct is allowing us to pass in the values of the below variables.
    // $rating was the same, however now it comes from a function, so we can tighten up what is allowed to be passed in as a rating.
    function __construct($title, $rating)
    {
        $this -> title = $title;
        $this -> setRating($rating);
    }
    function getRating(){
        return $this -> rating;
    }

    // The below function is setting the options that the variable $rating can be.
    // IF one of the below values aren't passed in when a new instance of the Movie class is made it will default to "NR"
    function setRating($rating){
        if($rating == "U" || $rating == "PG" || $rating == "12" || $rating == "15" || $rating == "18"){
            $this -> rating = $rating;
        }else{
            $this -> rating = "NR";
        }
    }
}

// All this means is that the variable $rating is locked down and uneditable, meaning there shold be less human error
// And something like $avengers = new Movie("Avengers", "poop"); can be entered. it would now be NR 
// And it isn't editable outside of the class it was made and set in.
$avengers = new Movie("Avengers", "12");
$avengers -> setRating("12");

echo $avengers -> getRating();

?>

</body>
</html>