<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>

<?php 
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
?>
    
</body>
</html>