<?php
class Decorator{

    public String $sentence;

    public function lower(){
        return strtolower($this->sentence);
    }
    public function uppercase(){
        return strtoupper($this->sentence);
    }
}