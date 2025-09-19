<?php 
echo "day of php series <br>";
// exception handling php
// try catch block 

function inverse($x){

    if(!$x){
        throw new Exception('Division by zero');
    }
    return 1/$x;
}


//echo inverse(0);


try{
    echo inverse(5);
    echo inverse(0);
}catch(Exception $e){
    echo "Caught exception", $e->getMessage(), ' ';
}finally{
    echo "First finally block <br>";
}

echo "Hello World";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>