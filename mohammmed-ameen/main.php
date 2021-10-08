<?php 



// define a constant (title) and use it as the page <title>
$title="http://127.0.0.1/Task5%20(mohammed%20ammen)/mohammmed-ameen/";
define("URL",$title,true);
echo URL;

echo "<br>";
echo "<br>";
echo "<br>";

// create variables course name , price and description 
 $course_Name="Back end develober";
  $price =5000;
  $description=nl2br("
  Learn about HTML, URLs, and HTTP.
  Databases.
");

// echo the value and type of each of them
echo"// echo the value and type of each of them";
echo "<br>";
echo "<br>";
echo"Course Name: ",$course_Name;//type string
echo "<br>";
var_dump($course_Name);//type String
echo "<br>";
echo "<br>";
echo "Price: ",$price;
echo "<br>";
var_dump($price);//type Integer
echo "<br>";
echo "<br>";
echo "Description: ", $description;
echo "<br>";
var_dump($description);//String


echo "<br>";
echo "<br>";
echo "<br>";


// “echo” true if $str1 or $str2 contains a whitespace after trimming them
echo"// “echo” true if str1 or str2 contains a whitespace after trimming them";
echo "<br>";
$str1 = "  Does this string contain a whitespace ' ' ?    ";
 $str2 = "  What_about_this?  ";
 echo str_replace("  ","",$str1);



 echo "<br>";
 echo "<br>";
 echo "<br>";



echo"// given 3 numbers echo  the absolute summation of them";
echo "<br>";
// given 3 numbers echo  the absolute summation of them
  $n1 = 3;
  $n2 = -3;
  $n3 = -6;
  echo $n1+abs($n2)+abs($n3);
  


  echo "<br>";
  echo "<br>"; 
  echo "<br>"; 


echo"//given str remove vowels from the given string";
echo "<br>"; 
//given $str remove vowels from the given string
 $str = "The vowels are 'aeiou', remove them from this string";
 echo str_replace(["a","e","i","o","u"],"",$str);
?>

