<?php 

echo "day2 of php series <br>";

// 1. numbers 1 to 10 

// for($x = 0; $x <= 10; $x++){
//     echo "number is  x : $x <br>";
// };


// 2. sum of first 100 number;
// $i = 1;
// $total = 1;
// while($i <= 100){
//     echo "the sum of $i is $total <br>";
//     $i++;
//     $total +=$i;
// };

//3. multiplication table

// $number = 5;
// $math = 1;
// while($math <= 10){
//     $total = $number * $math;
//     echo "$number x $math = $total <br>";
//     $math++;
// }

//4. factorial of a number

// $number = 5;
// $factorial = 1;
// $temp = $number;
// while($temp > 0){
//     $factorial *= $temp;
//     $temp--;
// };

// echo "factorial of $number is $factorial";


//5. Print all even number 

// $number = 1;

// for($number; $number <= 50; $number++){
//     if($number % 2 == 0 ){
//         echo "$number is even <br>";
//     }
//     else {
//         echo "$number is odd <br>";
//     }
// }

// 6. Reverse Counting;

// for($number = 10; $number >= 1; $number--){
//     echo "Reverse Counting from $number to 1 <br>";

//     if($number == 1) {
//         echo "finish reverse counting from number 10 to 1";
//         echo "Reverse Counting from $number to 0";
//     }
// }

// 7. Sum of array elements 
// $numbers = [2,4,6,8,10];
// $total_sum = 0;
// foreach($numbers as $number){
//     $total_sum += $number;
// }  
// echo "total sum is : $total_sum";

// 8. . Pattern Printing (Stars)
// $star = 1;
// $star_count = 5; 
// for($star; $star <= $star_count; $star++){
//     for($j = 1; $j <= $star; $j++){
//         echo "*";
//     }
//     echo "<br>";
// }

//10. Fibonacci Series
// $first = 0;
// $second = 1;

// for($i = 1; $i <= 10; $i++){
//     echo $first . "<br>";

//     $next = $first + $second;
//     $first = $second;
//     $second = $next;
// }