<?php 

// Task 3: Array Sorting  

$grades = [85, 92, 78, 88, 95];

function sortGrades(array $grades){
    // sort the array in descending order
    arsort($grades);

    print_r($grades);
}

// Call the function
sortGrades($grades);