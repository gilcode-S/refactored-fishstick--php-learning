<?php 
echo "day 4 of php series <br>";


// set cookie
setcookie('name', "Garth", time() + 86400);

// get cookie
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

// delete cookie
setcookie('name', '', time() - 86400);



// sessions -----

?>