<?php 

$first = 0;
$second = 1;

echo "The first 10 Fibonacci numbers: ";

for ($i = 1; $i <= 10; $i++) {
    // Calculate the next Fibonacci number
    $next = $first + $second;
    
    // Print the current Fibonacci number
    echo $next . " ";

    // Check if the current Fibonacci number exceeds 100
    if ($next > 100) {
        break; // Exit the loop if it exceeds 100
    }

    // Update the values for the next iteration
    $first = $second;
    $second = $next;
}

echo "\n";

