<?php
echo "day 5 of php series <br>";

class User
{
    // properties
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //method
    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    // constructor

}
// instances
$user1 = new User('Garth', "garthdev@gmail", "123");
$user2 = new User("samuru", "samuru@gmail", "456");
echo $user1->email;
echo $user2->name;

// inheritence

class employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }
}

$emp1 = new employee('john doe', 'john doe@gmail', '789', 'manager');
var_dump($emp1);

// $user1->setName("Garth");
// $user2->setName("GarthDev");
//$user1->name = "Garth";
//var_dump($user2);
// echo $user1->getName();
// echo $user2->getName();
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