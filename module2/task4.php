<?php 

function printFibonacci($count) {
    $first = 0;
    $second = 1;

    echo "The first $count Fibonacci numbers: ";

    for ($i = 1; $i <= $count; $i++) {
        // Print the current Fibonacci number
        echo $first . " ";

        // Calculate the next Fibonacci number
        $next = $first + $second;

        // Update the values for the next iteration
        $first = $second;
        $second = $next;
    }

    echo "\n";
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
