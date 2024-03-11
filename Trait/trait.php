<!-- trait -->
<?php
trait Main{
    public function info1(){
        echo "This is info 1 class"."<br>";
    }
}
trait Main2{
    public function info2(){
        echo "This is info 2 class"."<br>";
    }
}
trait Main3{
    public function info3(){
        echo "This is info 2 class"."<br>";
    }
}

class Child{
    use Main,Main2,Main3;
    public function save(){
        echo"This is child class" ."<br>";

    }
}

class Child2{
    use Main3;
    public function run(){
        echo"This is last class"."<br>";

    }

}

$m=new Child();
$m->info1();
$m->info2();
$m->info3();
$m->save();
$m=new Child2();
$m->run();


echo"This is my first Php";