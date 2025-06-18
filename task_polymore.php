<?php

class animals{

    public function bark(){
        return"bark";
    }
}
class dog extends animals{
    public function bark(){
        return "dog bark";
    }
}
class cat extends animals{
    public function bark(){
        return "cat meow";
    }
}
class monkey extends animals{
    public function bark(){
        return "monkey yayay";
    }
}

$arr=[];
$arr= [new dog, new cat, new monkey];
foreach ($arr as $value) {
    echo $value->bark()."<br>";
}



?>