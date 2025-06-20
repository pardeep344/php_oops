<?php

interface notification{
    public function send($message);
}

trait timestamp{
    public function get(){
         return date('y-m-d h:i:s');
    }
}

final class sendNotif implements notification{
    use timestamp;

    public static $app='my app';
    public static function setName($name){
         self::$app=$name;
    }
    public function send($message){
        $time=$this->get();
        echo"[time:$time] From " .self::$app.": $message";
    }
}
sendNotif::setName("travel");
$obj=new sendNotif();
$obj->send("hello");


?>