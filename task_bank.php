<?php

class bank{
    private $accountName;
    private $balance=0;

    public function deposit($deposit){
        $this->balance+=$deposit;
    }
    public function withdraw($withdraw){
        if($this->balance<$withdraw){
            echo"balance is not sufficent";
        }
        else{
            $this->balance-=$withdraw;
            echo"withdrawal successful".' '.$withdraw;
        }
    }
    public function balance(){
        return $this->balance;
    }
}
$user1=new bank();
$user1->deposit(10);
$user1->withdraw(5);
echo"<br>your current balance is ".$user1->balance();




?>