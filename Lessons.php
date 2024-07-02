<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <!-- the form is here for visiblity purposes,this is actually lesson 5 -->
<!-- lesson5-working with forms -->
<form action="Lessons.php" method="post"> 
    <!-- when you use get the information can be modified inthe url,use post when you don't want the input to be modified in the url -->
    Name: <input type="text" name = "name"><br>
    <input type="submit">
</form>
<br>
<!-- lesson 6-more practice with forms-mad libs game -->
 <form action="Lessons.php">
    Name: <input type="text" name = "flower"><br>
    Noun: <input type="text" name = "noun"><br>
    Color: <input type="text" name = "color"><br>
    <input type="submit">
 </form>
<?php 
$Name = $_POST["flower"];
$Noun = $_POST["noun"];
$Color = $_POST["color"];
echo "Roses are$Color violets are$Color i love$Name";
//now lets get the name submitted from our form
 echo "Your name is: ". $_POST["name"];//use the . operator to concatenate
//  when you use get the information can be modified inthe url,use post when you don't want the input to be modified in the url

//php inside html-lesson1(beginning)

echo "<h1>Hello Brian</h1>";
//variables-lesson2

//to create a variable start with a dollar sign

$studentsName = "Brian";
$studentsAdmission = 10773;

echo "<h2>Todays most absent student is $studentsName whose admission number is $studentsAdmission</h2>";

//datatypes-lesson3
//php is loosely typed,you dont have to specify what datatype it is like other languages

$catchPhrases = "Yikes";//this is a string automatically by just enclosing it in the ""
$phraseInventor = "Brian";//still a string
$year = 1903; //this is automatically an integer
$height = 5.4; //automatically a double/float 
$isMale = true; //automatically a boolean
//you get the point..any datatype you know from any other language is same in php just that you don't have to specify
echo "<p> <b>The best catchphrase in human history is $catchPhrases invented by the great $phraseInventor in the year $year , his height was
      $height...<b></p>";//always end with a semicolon

//lesson3-playing with some string methods

echo strtolower($catchPhrases);//converts the string to lowercase 
echo strtoupper($catchPhrases);//converts the string to uppercase
echo strlen($phraseInventor);//to find out the length of a string
echo $phraseInventor[0];//indexes start at 0....this helps in finding the value at the index
echo $phraseInventor[0] = "K";//indexes start at 0....this replaces the value at index
echo $phraseInventor;

//lesson4-playing with numbers

$number = 10;
echo $number + 20;//this will just do the math you want it to do
echo $number - 20;//this will just do the math you want it to do
echo $number / 20;//this will just do the math you want it to do
echo $number * 20;//this will just do the math you want it to do
echo $number ++;//this will just do the math you want it to do
echo $number --;//this will just do the math you want it to do

//lesson7-arrays
$friends = array("Brian","Michael","Ryan","Creed");
echo $friends[0];//arrays indexing starts at 0 so this will print out Brian
echo $friends[0] = "David";//this will change th evalue of the first index to David
echo $friends[0] ;//print out the first index to confirm

//lesson8-associative arrays-this are arrays that have a key and value pair,each key must be unique
$grades = array("Brian"=>"A","Michael"=>"B","Ryan"=>"C","Creed"=>"E");
echo $grades["Brian"];//this will print out Brians grade
echo $grades["Brian"] = "B+";//this change his grade
echo $grades["Brian"];//this display his new grade his grade
echo count($grades);//this counts how many items are in the array

//less0n9-functions and parameters
function sayHi($name){//name is a parameter
    echo "Ohoey $name";
}
//you must call a function and pass a value as per the parameters
sayHi("Dwight");
sayHi("Creed");
sayHi("Michael");
?>

    
</body>
</html>