<?php 
echo "day 4 of php series <br>";


// set cookie
//setcookie('name', "Garth", time() + 86400);

// get cookie
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

// delete cookie
//setcookie('name', '', time() - 86400);



// sessions -----


//echo "get post data from forms <br>";

session_start();

if(isset($_POST['submit'])){
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

  $password = $_POST['password'];

  if($username == "garth" && $password == 'password'){
    $_SESSION['username'] = $username;
    header('Location: /php/extras/dashboard.php');
  } else {
    echo "Incorrect username or password";
  }
}
?>


<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=garth">Click me</a> -->


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="username"> username: </label>
    <input type="text" name="username">
</div>
<div>
    <label for="password"> Password: </label>
    <input type="text" name="password">
</div> 
<input type="submit" value="Submit" name="submit">
</form>