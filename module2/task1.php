<?php 

// Using a for loop
function evenNumbersFor($start, $end, $step){
    for($i = ++$start; $i <= $end; $i += $step){
        if($i % 2 == 0){
            echo $i . PHP_EOL;
        }
    }
}
// Call the function to print even numbers from 2 to 20
evenNumbersFor(start:1, end:20, step:2);

// Using a while loop
function evenNumbersWhile($start, $end, $step){
    $i = ++$start; // Count $i from 2 by incrementing 1
    while($i <= $end){
        if($i % 2 ==0){
            echo $i . PHP_EOL;
        }
        $i += $step;
    }
}
// Call the function to print even numbers from 2 to 20
evenNumbersWhile(start:1, end:20, step:2);

// Using a do while loop
function evenNumbersDoWhile($start, $end, $step){
    $i = ++$start; // Count $i from 2 by incrementing 1
    do{
        if($i % 2 ==0){
            echo $i . PHP_EOL;
        }

        $i += $step;

    }while($i <= $end);
    
}
// Call the function to print even numbers from 2 to 20
evenNumbersDoWhile(start:1, end:20, step:2);


