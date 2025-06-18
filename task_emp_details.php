<?php

 

class emp{
    public $name;
    public $salary;

    public function getdetails($name,$salary){
        $this->name=$name;
        $this->salary=$salary;
        return "Name:$this->name<br>Salary:$this->salary";
         
    }
}

class developer extends emp{
    public $bouns;

    public function getdetails($name,$salary,$bouns=0){
        $this->name=$name;
        $this->salary=$salary;
        $this->bouns=$bouns;
        return "Name: $this->name <br> Salary: $this->salary <br> $this->bouns";
    }
}
class manager extends emp{
    public $bouns;

    public function getdetails($name,$salary,$bouns=0){
        $this->name=$name;
        $this->salary=$salary;
        $this->bouns=$bouns;
        return "Name: $this->name <br> Salary: $this->salary <br> $this->bouns";
    }
}

$employe=new developer();
echo $employe->getdetails('pardeep',0,89);




?>