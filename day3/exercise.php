<?php

echo "functions exercise from from gpt <br>";

// 1. greeting function

function Greeting($name)
{
    echo "Welcome $name";
}
// Greeting("gilbert");

// 2. Add two number;
function addTwoNumber($n1, $n2)
{
    return $n1 + $n2;
}
//echo addTwoNumber(10 , 1);

// 3. Check Even or Odd
function checker($num)
{
    if ($num % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}
// echo checker(0);

// 4.Find Maximum of Two Numbers 

function maxNumber($num, $num2)
{
    if ($num > $num2) {
        return "the number $num is larger than number $num2";
    } else {
        return "the number $num2 is larger than number $num";
    }
}

//echo maxNumber(5, 1);

// 5. Factorial Function


function factorialNumber($number)
{
    $factorial = 1;
    $temp = $number;
    while ($temp > 0) {
        $factorial *= $temp;
        $temp--;
    }
    return $factorial;
}
//echo factorialNumber(5);


// 6. Reverse String
$text = "hello";
$reversed = strrev($text);
// echo $reversed;
function reverseString($text)
{
    $reversed = "";

    for ($i = strlen($text) - 1; $i >= 0; $i--) {
        $reversed .= $text[$i];
    }
    return $reversed;
}

//echo reverseString("Hello world");

// 7. Palindrome Checker 

function isPalindrome($text)
{
    $length = strlen($text);
    for ($i = 0; $i < $length / 2; $i++) {
        if ($text[$i] !== $text[$length - $i - 1]) {
            echo "$text is not a palindrome";
            return;
        }
    }
    echo "$text is a palindrome";
}

// isPalindrome("gilbert");

// 8. Calculate Average 

function calculateAverage($numbers) {
    if (empty($numbers)) {
        return 0; // avoid division by zero
    }

    $sum = 0;

    foreach ($numbers as $num) {
        $sum += $num; // add each number
    }

    $average = $sum / count($numbers);
    return $average;
}

// Example usage
$nums = [2, 4, 6, 8, 10];
//echo "Average is: " . calculateAverage($nums);


