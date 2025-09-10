<?php  
// data types

// $name = "gilbert"; // string
// $age = 22; // int
// $student = true; // bool
// $cash = 20.25; // decimal


// data type checking var_dump 
//var_dump($student)

// echo "$name is $age years old <br/>";
// echo "$name has $cash in his accout <br/>";
// echo '5' + '5';


// create constant
// usually use in db connection
// define('HOST', 'Location');
// define('DB_name', "dev_db");

// arrays in php
 // -- simple arr
//  $numbers = [1,2,3,5];
//  $fruits = array('apple', 'orange', 'banana');

// echo $fruits[1];
//print_r($numbers);
//var_dump($numbers);

//associative array
// $colors = [
//     1 => "red",
//     2 => "blue",
//     3 => "green"
// ];

// echo $colors[2];

// assiciative array with string keys
// $hex = [
//     'red' => '#f00',
//     "green" => "#0f0",
//     "blue" => "#00f"
// ];

// echo $hex['blue'];

// $person = [
//     'first_name' => 'gilbert',
//     'last_name' => 'engalan',
//     'email' => "gilbertengalan@gmail.com"
// ];
// echo $person['first_name'];

// multi dimensional array
// $people = [
//     [
//         'first_name' => 'gilbert',
//         'last_name' => 'engalan',
//         'email' => "gilbertengalan@gmail.com"
//     ],
//     [
//         'first_name' => 'garth',
//         'last_name' => 'engalan',
//         'email' => "gilbertengalan@gmail.com"
//     ],
//     [
//         'first_name' => 'devGarth',
//         'last_name' => 'engalan',
//         'email' => "gilbertengalan@gmail.com"
//     ],
// ];
// echo $people[1]['first_name'];
// var_dump(json_encode($people));
?>