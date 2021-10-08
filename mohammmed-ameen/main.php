<?php 


// define a constant (title) and use it as the page <title>
$title="PHP define() Function";
define("URL",$title,true);

	// create variables course name , price and description 
  $course_Name="Back end develober";
  $price =5000;
  $description=nl2br("
  1_Learn about HTML, URLs, and HTTP.
  2_Learn about forms and how to handle inputs from your users.
  3_Databases.
");

	// echo the value and type of each of them
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

?>
<p><?php echo URL;?></p>  



<p>// “echo” true if $str1 or $str2 contains a whitespace after trimming them</p>
<?php 
// “echo” true if $str1 or $str2 contains a whitespace after trimming them
 $str1 = "  Does this string contain a whitespace ' ' ?    ";
 $str2 = "  What_about_this?  ";
 echo str_replace("  ","",$str1)
?>


<br>
<br>


<p>// “echo” true if $str1 or $str2 contains a whitespace after trimming them</p>
<?php 
// “echo” true if $str1 or $str2 contains a whitespace after trimming them
 $str1 = "  Does this string contain a whitespace ' ' ?    ";
 $str2 = "  What_about_this?  ";
 echo str_replace("  ","",$str1)
?>


<br>
<br>
<br>


<p>// given 3 numbers echo  the absolute summation of them</p>
<?php 
// given 3 numbers echo  the absolute summation of them
  $n1 = 3;
  $n2 = -3;
  $n3 = -6;
  echo $n1+abs($n2)+abs($n3);
?>

<br>
<br>
<br>


<p>//given $str remove vowels from the given string</p>
 <?php 
//given $str remove vowels from the given string
 $str = "The vowels are 'aeiou', remove them from this string";
 echo str_replace(["a","e","i","o","u"],"",$str);
?>

