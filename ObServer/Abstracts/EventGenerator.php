<?php
namespace Zero\Abstracts;
use Zero\Interfaces\ObServerInterface;

/**
 * 事件发生者
 */
abstract class EventGenerator{
    /**
     * 保存添加的观察者
     */
    private $ObServers = [];

    function addObServer(ObServerInterface $ObServer){
        $this->ObServers[] = $ObServer;
    }
    
    function notify($event_type = 'default_func'){
        foreach ($this->ObServers as $ObServer) {
            if(\method_exists($ObServer,$event_type)){
                \call_user_func([$ObServer,$event_type]);
            }else{
                // ...
            } 
        }
    }

}