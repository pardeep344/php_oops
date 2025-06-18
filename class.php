<?php
class car{
    public $user_name;
    public $user_email;

    function __construct($name,$email){
        $this->user_name=$name;
        $this->user_email=$email;

    }
    function user(){
        echo $this->user_name;
        echo"<br>";
        echo $this->user_email;
    }
}

$users = [];

$users[] = new car("John", "john@example.com");
$users[] = new car("Alice", "alice@example.com");

foreach ($users as $user) {
    $user->user();
    echo"<br><br>";
}


 

?>