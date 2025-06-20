<?php

trait date_time{
    public function setDateTime(){
        $data=new DateTime();
        return $data->format('y-m-d H:i:s');
    }
}

class showDateTime{

    use date_time;
}

$obj=new showDateTime();
echo $obj->setDateTime();

?>