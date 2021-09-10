<?php

use Dispatcher as GlobalDispatcher;
use Illuminate\Contracts\Bus\Dispatcher as BusDispatcher;

class Dispatcher{
    protected $listeners = array();
    public function __construct(){}

    public function getInstance(){
        
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    public function subscribe($publisher , $subscriber){
        $instance = Dispatcher::getInstance();
        $instance->listeners[spl_object_hash($publisher)][]=$subscriber;
    }

    public function publish($object,$i){
        $instance = Dispatcher::getInstance();
        $subscribers = $instance->listeners[spl_object_hash($object)];
        foreach ($subscribers as $sub){
            $i = $sub->addOneAndEcho($i);
        }
    }

}

?>