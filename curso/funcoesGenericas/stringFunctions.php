<?php

$string = "Hello, world!";

// Get the length of the string
$length = strlen($string);
echo "The length of the string is: " . $length;

// Convert the string to uppercase
$uppercase = strtoupper($string);
echo "Uppercase string: " . $uppercase;

// Convert the string to lowercase
$lowercase = strtolower($string);
echo "Lowercase string: " . $lowercase;

// Replace a specific substring in the string
$replaced = str_replace("world", "universe", $string);
echo "Replaced string: " . $replaced;

// Reverse the string
$reversed = strrev($string);
echo "Reversed string: " . $reversed;

// Compare two strings
$compare = strcmp($string, "Hello, world!");
if ($compare == 0) {
  echo "The strings are equal";
} elseif ($compare < 0) {
  echo "The first string is less than the second string";
} else {
  echo "The first string is greater than the second string";
}

// Trim whitespace from the beginning and end of the string
$trimmed = trim($string);
echo "Trimmed string: " . $trimmed; // "  aaa      " =  "aaa"

// Split the string into an array of substrings
$split = explode(" ", $string); // ["Hello,", "world!"]

// Join an array of substrings into a single string
$joined = implode(" ", $split); // "Hello, world!"

// Get a substring of the string
$substring = substr($string, 7, 5); // "world"  where 7 is the start index and 5 is the length

// Find the position of a substring in the string
$position = strpos($string, "world"); // 7

// Count the number of occurrences of a substring in the string
$count = substr_count($string, "l"); // 3

// Check if the string starts with a specific substring
$startsWith = substr($string, 0, 5) === "Hello"; // true

// Check if the string ends with a specific substring
$endsWith = substr($string, -1, 1) === "!"; // true

// Repeat the string a specific number of times
$repeated = str_repeat($string, 3); // "Hello, world!Hello, world!Hello, world!"

// Pad the string with a specific substring to make it a specific length
str_pad($string, 20, "-") // "Hello, world!-------" (adds dashes to the end of the string to make it 20 characters long)

?>