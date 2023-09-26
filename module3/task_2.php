<?php 

// Task 2: Array Manipulation

$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumbers(array $numbers){
    $result = [];   // define empty array

    foreach ($numbers as $number) {
        if ($number % 2 != 0) { // remove even number
            $result[] = $number;
        }
    }

    return $result;
}

// Call the function to remove even numbers
$filteredNumbers = removeEvenNumbers($numbers);

// Print the resulting array
print_r($filteredNumbers);