<?php
namespace Zero;
use Zero\Interfaces\ObServerInterface;

class ob2 implements ObServerInterface{
    function creating(){
        echo 'creating2' . PHP_EOL;
    }
    function created(){
        echo 'created2' . PHP_EOL;
    }
    function updating(){
         echo 'updating2' . PHP_EOL;
    }
    function updated(){
        echo 'updated2' . PHP_EOL;
    }
    function default_func(){
        echo 'default_func2' . PHP_EOL;
    }
}