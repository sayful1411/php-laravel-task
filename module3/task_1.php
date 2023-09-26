<?php 

// Task 1: String Manipulation

// Define the initial string
$text = "The quick brown fox jumps over the lazy dog.";

function modifyText(string $text) {
    // Convert the string to all lowercase
    $lowercaseText = strtolower($text);
    // Replace "brown" with "red" in the string.
    $replaceText = str_replace("brown","red",$lowercaseText);

    // Print the modified text
    echo $replaceText; 
}

// Call the function
modifyText($text);