<?php
class Unit{
    function __construct()
    {
        echo "<h1>I am Parent</h1>";
    }
    function fun()
    {
        echo "I am child";
    }
}

class Book extends Unit{
    function __construct()
    {
        parent::__construct();

        echo "<h2>I am Book Parent</h2>";

        
    }
    function greet()
    {
        echo "I am Book Child";
    }
}
$obj2=new book();
$obj2->fun();


?>
