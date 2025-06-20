<?php

abstract class emp{
    public $name;

    public function setname($name){
        return $this->name=$name;
    }
    abstract public function calculate();
}

class manager extends emp{
    public $salary;
    public function calculate($salary=0){
        return $this->salary=$salary;
}
}
class developer extends emp{
    public $salary;
    public function calculate($salary=0){
        return $this->salary=$salary;
}
}

$manager = new manager();
echo "salary".$manager->calculate(4500);

?>