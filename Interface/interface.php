<?php
interface User{
     public function getname();
     public function info();
     public function display();

} 

class wdpf implements user{
    public function getname(){
        echo "educate.<br>";
    }

    public function info(){
        echo "final.<br>";
    }

    public function display(){
        echo "exam.";
    }
}

$add= new wdpf;
$add->getname();
$add->info();
$add->display();






?>
