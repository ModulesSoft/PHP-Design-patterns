<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */

use Smtpapi\Header;

/**
 * Suggested URL patterns for your solution:
 *      index.php?m=greeting&a=hello
 *      index.php?m=greeting&a=goodbye
 */
include_once "./Controller/GreetingController.php";

include_once "./Model/Greeting.php";

empty($_GET) ? new GreetingController('index') : Null;

if (isset($_GET['m']) && $_GET['m'] == "greeting")
    return new GreetingController($_GET['a']);
else
    return header("HTTP/1.0 404 Not Found");

return header("HTTP/1.0 404 Not Found");
