<?php


interface logger{
    public function log();
}

class consolelogger implements logger{
    public function log(){
        echo "log is successfull";
    }
}
$obj= new consolelogger();
$obj->log();


?>