<?php
namespace Zero\Interfaces;

/**
 * 观察者接口
 */
interface ObServerInterface{
    function creating();
    function created();
    function updating();
    function updated();
    function default_func();
    // ...
}