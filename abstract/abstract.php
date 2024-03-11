<?php
abstract class User{
    abstract public function getname();
    abstract public function info();
    abstract public function display();
     public function display3(){
        echo "ok";
     }


} 

class wdpf extends user{
    public function getname(){
        echo "Done.<br>";
    }

    public function info(){
        echo "second.<br>";
    }

    public function display(){
        echo "First.";
    }
}

$add= new wdpf;
$add->getname();
$add->info();
$add->display();






?> b