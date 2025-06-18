<?php

class user{
    private $name;

    function setter($name){
        if(strlen($name)===7){
            $this->name=$name;
        }
    }
    function getter(){
        return $this->name;
    }
}

$obj_user=new user;
$obj_user->setter('pardeep');
echo $obj_user->getter();


?>