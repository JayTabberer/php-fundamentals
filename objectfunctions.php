<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

class Student {
    var $name;
    var $major;
    var $gpa;

    function __construct($name, $major, $gpa)
    {
        $this -> name = $name;
        $this -> major = $major;
        $this -> gpa = $gpa;
    }

    function hasHonors(){
        // $this -> gpa below refers to each objects own instance of gpa. or what ever the funciton wou'd want to do
        if($this -> gpa >= 3.6){
            return "true";
        }
        return "false";
    }
}

$student1 = new Student("Jay", "Business", 2.8);
$student2 = new Student("Rosie", "Art", 4.8);

echo $student1 -> hasHonors();



?>

</body>
</html>