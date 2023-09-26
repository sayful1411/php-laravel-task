<?php 

// Task 4: Multidimensional Array

$studentGrades = [
    'student1' =>   ['Math' => 85, 'English' => 92, 'Science' => 78],
    'student2' =>   ['Math' => 88, 'English' => 95, 'Science' => 90],
    'student3' =>   ['Math' => 75, 'English' => 80, 'Science' => 82],
];

function calculateAverageGrade($studentGrades){
    foreach($studentGrades as $student => $grades){
        $total = array_sum($grades);
        $average = $total / count($grades);
        echo "$student's average grade: $average\n";
    }
}

calculateAverageGrade($studentGrades);