<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */


/**
 * Suggested URL patterns for your solution:
 *      index.php?m=greeting&a=hello
 *      index.php?m=greeting&a=goodbye
 */
include_once "./Controller/GreetingController.php";
include_once "./Controller/NotfoundController.php";
include_once "./Model/Greeting.php";

if(empty($_GET)){
    new GreetingController('index');
}elseif (isset($_GET['m']) && $_GET['m'] == "greeting"){
    return new GreetingController($_GET['a']);
}
else{
    return new NotfoundController();
}
