<?php


// run time polymorephism
class vicale{
    public function car(){
        echo"car have run petrol and diesal";
    }

}

class maruti extends vicale{
    public function car(){

        echo"maruti runs on petrol";
    }
}

class bmw extends vicale{

    public function car(){
        echo"bmw runs on diesel";
    }
}

$maruti_obj=new maruti();
$bmw_obj=new bmw();
echo $maruti_obj->car();
echo"<br>";
echo $bmw_obj->car();


?>