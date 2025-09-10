<?php 
// part 2 day 2 

echo  "test part 2 <br/>";
$day = 4;
//6. day of the week switch case
// switch($day){
//     case 1:
//         echo "Monday";
//         break;
//     case 2: 
//         echo "Tuesday";
//         break;
//     case 3: 
//         echo "Wednesday";
//         break;
//     case 4:
//         echo "Thursday";
//         break;
//     case 5:
//         echo "friday";
//         break;
//     case 6:
//         echo "Saturday";
//         break;
//     case 7:
//         echo "Sunday";
//         break;
//     default:
//         echo "Plase Try again.";
// };

//7. simple login check

$username = "gilbert";
$password = "123";


// if($username == $username && $password == $password){
//     echo "Welcome $username";
// } else {
//     echo "Password and username is incorrect";
// }

//8. Leap Year Chceker

$year = 21;

// if($year <= 100) {
//     echo "Early Year can be either bc or bca";
// }

// echo ($year % 4 == 0 ) ? "Leap Year" : "Not Leap Year";


//9. Discount Calculator
// echo "Discount only applied when the user purchase more than 1000 <br/>";
// $purchase = 1200;
// $discount = 0.10;
// $total = 0;

// if($purchase < 1000) {
//     echo "No discount";
// } else if ($purchase >= 1000) {
//     echo "You have 10 percent discount <br/>";
//     $total = ($purchase * $discount);
//     echo "Your total is $total discount <br/>";
//     $totalAmount = $purchase - $total;
//     echo "Your total Amount is $totalAmount <br/>";
// }


//10. traffic light system

$traffic_light = "red";

// switch($traffic_light){
//     case "red":
//         echo "stop";
//         break;
//     case "yellow":
//         echo "slow down";
//         break;
//     case "green":
//         echo "Go";
//         break;
//     default:
//         echo "You have valiolation";
//         break;
// }



// ---------- loops
    //for loop
    // for($x = 0; $x <= 10; $x++){
    //     echo $x;
    // }

    // while
    // $x = 1;
    // while($x <= 5){
    //     echo "number $x";
    //     $x++;
    // }

    // foreah loop syntax
    $post = ['First', 'second ', 'third'];

    // for($x = 0; $x < count($post); $x++){
    //     echo $post[$x];
    // }

    // foreach($post as $index => $posts) {
    //     echo  "$index of $posts";
    // }

    $person = [
        'firstname' => "Gilbert",
        'lastname' => "Engalan",
        'age' => "22"
    ];

    // foreach($person as $key => $value){
    //     echo "$key - $value <br>";
    // }




    // ------ looping function exercise
    
?>