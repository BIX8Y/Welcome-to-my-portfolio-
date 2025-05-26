<?php
// Single-line comment
/* Multi-line comment
   This is a multi-line comment
*/

// Case sensitivity in variable names
$Name = "Veneracion, Kurt Benedict Pangan";
$name = "Veneracion, Kurt Benedict Pangan";

// Declaring and using variables
$age = 21;
$height = 6.2;
$isDeveloper = true;

// Outputting content using echo or print
echo "<h1>Welcome to my portfolio!</h1>";
echo "<p>I am $Name, a $age year old developer.</p>";

// Using different data types
echo "<p>My height is $height meters.</p>";
echo "<p>Am I a developer? " . ($isDeveloper ? "Yes" : "No") . "</p>";

// String concatenation using . operator
$greeting = "Hello, my name is " . $Name . " and I am a developer.";
echo "<p>$greeting</p>";

// Include sections
include 'sections/about.php';
include 'sections/hobbies.php';
include 'sections/favorites.php';
?>
