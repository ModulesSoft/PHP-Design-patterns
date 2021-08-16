<?php
class GreetingController
{
    private $page = "index";
    function __construct($page)
    {
        $this->page = $page;

        $model = new Greeting();
        
        if($this->page == 'index'){
            $message = null;
        }elseif($this->page == "hello"){
            $message = $model->hello();
        }elseif($this->page == "goodbye"){
            $message = $model->goodbye();
        }else{
            new NotfoundController();
        }
        include_once "./View/greetingPage.php";
    }
}
