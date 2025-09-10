<?php 

echo "Day 3 of php series <br>";

// functions

function registerUser($email){
    echo "$email Registered success";
};

//registerUser("gilbert@gmail.com");

function sum($n1, $n2){
    return $n1 + $n2;
}

// $number = sum(5,5);
// echo $number;


/// ------- array function

$fruits = ['apple', 'orange', 'pear'];

// get length of array

//echo count($fruits);

//var_dump(in_array("apple", $fruits));
// add in the array
$fruits[] = "grape";
array_push($fruits, "cherry", "banana");
array_unshift($fruits, 'mango');
//remove from the array
array_pop($fruits);
array_shift($fruits);
//unset($fruits[2]); remove the index

// array split 
$chunk_array = array_chunk($fruits, 2);
print_r($chunk_array);
print_r($fruits);

// concat

$arr = [1,2,3,5];
$arrs = [2,4,5,6];

$arrays = array_merge($arr, $arrs);
$arrays2 = [...$arr, ...$arrs];

print_r($arrays2);
print_r($arrays);