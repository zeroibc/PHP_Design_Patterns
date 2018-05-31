<?php
namespace Zero;
use Zero\Interfaces\ObServerInterface;

class ob1 implements ObServerInterface{
    function creating(){
        echo 'creating1' . PHP_EOL;
    }
    function created(){
        echo 'created1' . PHP_EOL;
    }
    function updating(){
         echo 'updating1' . PHP_EOL;
    }
    function updated(){
        echo 'updated1' . PHP_EOL;
    }
    function default_func(){
        echo 'default_func1' . PHP_EOL;
    }
}