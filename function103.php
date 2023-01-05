<?php
    //Anonymouse function
    $message = "Hello!";
    $age = 25;
    $h1 = function($name)use($message,$age){
        return array ($message,$name,$age);
    };

    //$msg = $h1("Mark");
    //print($msg[0].$msg[1].$msg[2]);
    [$message,$name,$age] = $hi("Mark");
    print($message . $name .", Age: $age");
?>    