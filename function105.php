<?php
    $closure = function($name){
        return $name;
    };
    print (get_class($closure));
    print("<br />");
    
    [$name,$age] = $closure("mark", 25);
    print($fname[0] . $fname[1]);