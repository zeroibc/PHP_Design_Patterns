<?php
namespace Zero;
use Zero\Abstracts\EventGenerator;
use Zero\ob1;
use Zero\ob2;

class Test extends EventGenerator{

    function trigger(){
        echo 'lalalal' . PHP_EOL;
        // 通知观察者
        $this->notify();
    }
}

