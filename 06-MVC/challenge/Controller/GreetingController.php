<?php
class GreetingController
{
    private $page = "index";
    function __construct($page)
    {
        $this->page = $page;
        $this->page == 'index' ? include_once "./View/index.php" : null;
        $model = new Greeting($this->page);
        if($model){
            $page = $model->getPage();
            include_once "./View/$page.php";
        }
        else{
            header("HTTP/1.0 404 Not Found");
        }
    }
}
