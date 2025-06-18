<?php


class vechile{
    public $name;


    function set($name){
          $this->name=$name;
    }
    function show(){
       echo $this->name;
    }

    
}

class car extends vechile{

    public $name="mh-0";

    function details(){
        echo"This is a car";
        echo"<br>";
    }
}

$mycar = new car();
$mycar->details();
$mycar->set('ma-09');
$mycar->show();


?>