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

