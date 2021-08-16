<?php

class Greeting
{
    private $page;
    function __construct($page)
    {
        if ($page == "hello") $this->page = 'hello';
        elseif ($page == "goodbye") $this->page= 'goodbye';
        else return false;
    }
    public function getPage(){
        return $this->page;
    }
}
